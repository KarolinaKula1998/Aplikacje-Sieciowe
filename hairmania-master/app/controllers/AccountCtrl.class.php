<?php

namespace app\controllers;

use PDOException;


class AccountCtrl
{
    private $records;
    private $user;

    public function generateView()
    {

        $view = $_GET['view'] ?? 'intro'; // Domyślnie pokazuj widok wyników

        try {
            $this->records = getDB()->select("results", [
                "[>]porositytypes (p)" => ["porosity_type_id" => "id"]
            ], [
                "results.id",
                "results.score_result",
                "results.created_at",
                "results.porosity_type_id",
                "p.name (porosity_name)"
            ], ["user_id" => $this->user['id'], "ORDER" => ["created_at" => "DESC"], "LIMIT" => 10]);
        } catch (PDOException $e) {
            getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }
        if (isset($this->records[0])) {
            getSmarty()->assign('currentPlan', $this->records[0]);
        } else {
            getSmarty()->assign('currentPlan', null); // Przypisz null, jeśli nie ma rekordu
        }
        getSmarty()->assign('currentView', $view);
        getSmarty()->assign('records', $this->records);  // lista rekordów z bazy danych
        getSmarty()->display('Account.tpl');
    }

    public function action_accountShow()
    {
        // 1. walidacja id osoby do edycji
        $this->user = $_SESSION['user'];

        if ($this->user) {
            $this->generateView();
        } else {
            // Obsługa przypadku, gdy rekord nie istnieje
            getMessages()->addError("Nie znaleziono użytkownika o podanym ID.");
            redirectTo('loginShow');
        }

        // 3. Wygenerowanie widoku
    }

    public function action_resultDelete()
    {
        try {
            $id = $_GET['id'] ?? null;
            // 2. usunięcie rekordu
            getDB()->delete("results", [
                "id" =>  $id
            ]);
            getMessages()->addInfo('Pomyślnie usunięto rekord');
        } catch (PDOException $e) {
            getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }

        $this->action_accountShow();
    }
}
