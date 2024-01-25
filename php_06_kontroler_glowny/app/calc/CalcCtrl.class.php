<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $infos;  //informacje dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $hide_intro; //zmienna informująca o tym czy schować intro

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->k = isset($_REQUEST['k']) ? $_REQUEST['k'] : null;
		$this->form->b = isset($_REQUEST['b']) ? $_REQUEST['b'] : null;
		$this->form->n = isset($_REQUEST['n']) ? $_REQUEST['n'] : null;
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
		} else { 
			$this->hide_intro = true; //przyszły pola formularza - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->k == "") {
			$this->msgs->addError('Nie podano pierwszej wartości');
		}
		if ($this->form->b == "") {
			$this->msgs->addError('Nie podano drugiej wartości');
		}
		if ($this->form->n == "") {
			$this->msgs->addError('Nie podano trzeciej wartości');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->k )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->b )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->n )) {
				$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
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
			$this->msgs->addInfo('Parametry poprawne.');
			$this->msgs->addInfo('Wykonano obliczenia.');
			
			//wykonanie operacji
			$this->result->r = ($this->form->k*(1+($this->form->b/$this->form->m)^$this->form->n)*(1+($this->form->b/$this->form->m)-1)/((1+($this->form->b/$this->form->m)^$this->form->n)-1))/10;
			}
		
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','Zachęcam do skorzystania z mojego kalkulatora w celu obliczenia przewidywanej raty kredytu.');
		$smarty->assign('page_header','Kontroler główny');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc/CalcView.html');
	}
}
