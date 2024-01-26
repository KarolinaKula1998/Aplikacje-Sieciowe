<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->k = getFromRequest('k');
		$this->form->b = getFromRequest('b');
		$this->form->n = getFromRequest('n');
		$this->form->m = 12;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->k ) && isset ( $this->form->b ) && isset ( $this->form->n ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->k == "") {
			getMessages()->addError('Nie podano pierwszej wartości');
		}
		if ($this->form->b == "") {
			getMessages()->addError('Nie podano drugiej wartości');
		}
		if ($this->form->n == "") {
			getMessages()->addError('Nie podano trzeciej wartości');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->k )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->b )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->n )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->k = intval($this->form->k);
			$this->form->b = intval($this->form->b);
			$this->form->n = intval($this->form->n);
			getMessages()->addInfo('Parametry poprawne.');
			getMessages()->addInfo('Wykonano obliczenia.');
			
			//wykonanie operacji
			$this->result->r = ($this->form->k*(1+($this->form->b/$this->form->m)^$this->form->n)*(1+($this->form->b/$this->form->m)-1)/((1+($this->form->b/$this->form->m)^$this->form->n)-1))/10;
			}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $user;

		getSmarty()->assign('user',$user);
				
		getSmarty()->assign('page_title','Kalkulator kredytowy');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}
