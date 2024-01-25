<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

//pobranie parametrów
function getParams(&$form){
	$form['k'] = isset($_REQUEST['k']) ? $_REQUEST['k'] : null;
	$form['b'] = isset($_REQUEST['b']) ? $_REQUEST['b'] : null;
	$form['n'] = isset($_REQUEST['n']) ? $_REQUEST['n'] : null;
	$form['m'] = 12;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){

	//sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
	if ( ! (isset($form['k']) && isset($form['b']) && isset($form['n']) ))	return false;	
	
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['k'] == "") $msgs [] = 'Nie podano pierwszej wartości';
	if ( $form['b'] == "") $msgs [] = 'Nie podano drugiej wartości';
	if ( $form['n'] == "") $msgs [] = 'Nie podano trzeciej wartości';
	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($msgs)==0 ) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $form['k'] )) $msgs [] = 'Pierwsza wartość nie jest liczbą calkowitą';
		if (! is_numeric( $form['b'] )) $msgs [] = 'Druga wartość nie jest liczbą całkowitą';
		if (! is_numeric( $form['n'] )) $msgs [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
// wykonaj obliczenia
function process(&$form,&$infos,&$msgs,&$r){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	//konwersja parametrów na int
	$form['k'] = floatval($form['k']);
	$form['b'] = floatval($form['b']);
	$form['n'] = floatval($form['n']);

	$r = ($form['k']*(1+($form['b']/$form['m'])^$form['n'])*(1+($form['b']/$form['m'])-1)/((1+($form['b']/$form['m'])^$form['n'])-1))/10;
	}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$r = null;
$hide_intro = false;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$r);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Zachęcam do skorzystania z mojego kalkulatora w celu obliczenia przewidywanej raty kredytu.');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('r',$r);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');