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

		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
		$this->form->okres = getFromRequest('okres');
	}

public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->oprocentowanie ) && isset ( $this->form->okres ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->oprocentowanie == "") {
			getMessages()->addError('Nie podano oprocentowania kredytu');
		}
		if ($this->form->okres == "") {
			getMessages()->addError('Nie podano okresu kredytowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Kwota kredytu nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->oprocentowanie )) {
				getMessages()->addError('Oprocentowanie nie jest liczbą rzeczywistą');
			}
			
			if (! is_numeric ( $this->form->okres )) {
				getMessages()->addError('Liczba miesięcy nie jest liczbą całkowitą');
			}
		}
		
			return ! getMessages()->isError();
	}
// 3. wykonaj zadanie jeśli wszystko w porządku	

public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = intval($this->form->kwota);
			$this->form->oprocentowanie = floatval($this->form->oprocentowanie);
			$this->form->okres = intval($this->form->okres);
			$m = 12;
			
			
			if (inRole('admin') || (inRole('user') && $this->form->oprocentowanie > 2)){
				$this->result->rata = ($this->form->kwota*(1+($this->form->oprocentowanie/$m)^$this->form->okres)*(1+($this->form->oprocentowanie/$m)-1)/((1+($this->form->oprocentowanie/$m)^$this->form->okres)-1));		
			} else {
				getMessages()->addError('Tylko manager może obliczać raty kredytów z oprocentowaniem mniejszym lub równym 2%'); 
			}
		
			
		}
		
		$this->generateView();
	}

public function generateView(){
		global $user;
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Oblicz swoją przewidywaną ratę kredytu');
		getSmarty()->assign('page_header','Symulacja kredytowa');
				
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('result',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}