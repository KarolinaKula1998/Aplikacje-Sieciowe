<?php
// W skrypcie definicji kontrolera nie trzeba dołączać żadnego skryptu inicjalizacji.
// Konfiguracja, Messages i Smarty są dostępne za pomocą odpowiednich funkcji.
// Kontroler ładuje tylko to z czego sam korzysta.

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

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

		$this->getparams();
		
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
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Zachęcam do skorzystania z mojego kalkulatora w celu obliczenia przewidywanej raty kredytu.');
		getSmarty()->assign('page_header','Symulator kredytowy');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.html'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}
