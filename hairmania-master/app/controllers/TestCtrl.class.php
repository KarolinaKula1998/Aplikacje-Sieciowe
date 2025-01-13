<?php

namespace app\controllers;

use PDOException;

class TestCtrl
{
    private $questions;
    private $groupedAnswers = [];

    public function action_testShow()
    {


        // Inicjalizacja numeru pytania
        $this->initializeCurrentQuestion();

        // Pobieranie danych z bazy
        $this->loadQuestions();
        $this->loadAnswers();

        // Obsługa akcji formularza
        $this->handleFormActions();

        // Wyświetlanie widoku
        $this->displayCurrentQuestion();
    }

    private function initializeCurrentQuestion()
    {
        if (!isset($_SESSION['current_question'])) {
            $_SESSION['current_question'] = 0; // Ustawienie domyślnego pytania
        }
    }

    private function loadQuestions()
    {
        try {
            $this->questions = getDB()->select("questions", ["id", "name"]);
        } catch (PDOException $e) {
            $this->handleDbError($e);
        }
    }

    private function loadAnswers()
    {
        try {
            $answers = getDB()->select("answers", ["id", "question_id", "answer_text", "score"]);
            foreach ($answers as $answer) {
                $this->groupedAnswers[$answer['question_id']][] = $answer;
            }
        } catch (PDOException $e) {
            $this->handleDbError($e);
        }
    }

    private function handleDbError(PDOException $e)
    {
        getMessages()->addError('Wystąpił nieoczekiwany błąd podczas pobierania rekordów');
        if (getConf()->debug) {
            getMessages()->addError($e->getMessage());
        }
    }

    private function handleFormActions()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Zapisz odpowiedź dla bieżącego pytania
            $this->saveCurrentAnswer();

            // Sprawdź, co użytkownik kliknął
            if (isset($_POST['save'])) {
                $this->saveAnswers();
            } elseif (isset($_POST['next'])) {
                $this->handleNextQuestion();
            } elseif (isset($_POST['back'])) {
                $this->goBackToPreviousQuestion();
            }
        }
    }

    private function handleNextQuestion()
    {
        $currentQuestionId = $this->questions[$_SESSION['current_question']]['id'];
        $selectedAnswerId = getFromRequest("question_{$currentQuestionId}", false);

        // Sprawdź, czy odpowiedź została wybrana
        if ($this->isAnswerSelected($selectedAnswerId)) {
            $_SESSION['current_question']++;
        } else {
            getMessages()->addError("Proszę wybrać odpowiedź na pytanie.");
        }
    }

    private function goBackToPreviousQuestion()
    {
        $_SESSION['current_question']--;
    }

    private function isAnswerSelected($selectedAnswerId)
    {
        return $selectedAnswerId !== null;
    }

    private function saveAnswers()
    {
        $totalScore = 0;
        foreach ($this->questions as $question) {
            if (!isset($_SESSION['answers'][$question['id']])) {
                // Jeśli dla pytania nie ma zapisanej odpowiedzi w sesji, dodajemy komunikat o błędzie
                getMessages()->addError("Proszę wybrać odpowiedź na pytanie: " . $question['name']);
                return; // Zatrzymujemy dalsze wykonywanie, jeśli brakuje odpowiedzi
            }

            $selectedAnswerId = $_SESSION['answers'][$question['id']];
            $totalScore += $this->calculateScore($question['id'], $selectedAnswerId);
        }

        // Określenie typu porowatości na podstawie wyniku
        $porosityType = $this->getPorosityType($totalScore, count($question));

        // Zapisanie wyniku do bazy
        $this->storeResult($totalScore, $porosityType);
    }

    private function saveCurrentAnswer()
    {
        // Sprawdzamy, czy odpowiedź jest zaznaczona, zanim zapisujemy ją do sesji
        $currentQuestionId = $this->questions[$_SESSION['current_question']]['id'];
        $selectedAnswerId = getFromRequest("question_{$currentQuestionId}", false,);

        // Zapisz odpowiedź w sesji tylko jeśli została wybrana
        if ($selectedAnswerId !== '') {
            $_SESSION['answers'][$currentQuestionId] = $selectedAnswerId;
        }
    }


    private function calculateScore($questionId, $selectedAnswerId)
    {
        $score = 0;

        if ($selectedAnswerId !== null && isset($this->groupedAnswers[$questionId])) {
            foreach ($this->groupedAnswers[$questionId] as $answer) {
                if ($answer['id'] == $selectedAnswerId) {
                    $score = $answer['score'];
                    break;
                }
            }
        }
        return $score;
    }

    private function getPorosityType($score, $totalQuestions)
    {
        $maxScore = $totalQuestions * 3;
        $percentage = ($score / $maxScore) * 100;

        $porosityTypes = getDB()->select("porositytypes", "*");

        foreach ($porosityTypes as $porosityType) {
            if ($percentage >= $porosityType['min_score_percentage'] && $percentage < $porosityType['max_score_percentage']) {
                return $porosityType;
            }
            // Dla wartości równej max_score_percentage, przypisz ostatni przedział
            if ($percentage == $porosityType['max_score_percentage']) {
                return $porosityType;
            }
        }

        return null; // Brak odpowiedniego typu porowatości
    }

    private function storeResult($totalScore, $porosityType)
    {
        try {
            getDB()->insert("results", [
                'user_id' => $_SESSION['user']['id'],
                'score_result' => $totalScore,
                'porosity_type_id' => $porosityType['id']
            ]);

            $_SESSION['test_completed'] = true;
            $_SESSION['last_result'] = [
                'score' => $totalScore,
                'porosity' => $porosityType['name'],
                'id' =>  $porosityType['id']
            ];
            // Resetowanie testu po zapisaniu wyników
            $_SESSION['current_question'] = 0;
            unset($_SESSION['answers']); // Usuwamy zapisane odpowiedzi w sesji
            redirectTo('resultShow');
        } catch (PDOException $e) {
            getMessages()->addError('Wystąpił błąd podczas zapisywania wyniku.');
            if (getConf()->debug) {
                getMessages()->addError($e->getMessage());
            }
        }
    }

    private function displayCurrentQuestion()
    {
        // Pobieramy aktualne pytanie
        $current_question = isset($this->questions[$_SESSION['current_question']]) ? $this->questions[$_SESSION['current_question']] : reset($this->questions);
        getSmarty()->assign('current_question', $current_question);
        getSmarty()->assign('groupedAnswers', $this->groupedAnswers);
        getSmarty()->assign('current_question_index', $_SESSION['current_question']);
        getSmarty()->assign('total_questions', count($this->questions));

        // Pobieramy zaznaczoną odpowiedź z sesji, jeśli istnieje
        $selectedAnswerId = isset($_SESSION['answers'][$current_question['id']]) ? $_SESSION['answers'][$current_question['id']] : null;
        getSmarty()->assign('selectedAnswerId', $selectedAnswerId);

        $this->generateView();
    }

    public function generateView()
    {
        getSmarty()->display('TestView.tpl');
    }
}
