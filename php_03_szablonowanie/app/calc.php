<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// Kontroler podzielono na część definicji etapów (funkcje)
// oraz część wykonawczą, która te funkcje odpowiednio wywołuje.
// Na koniec wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy  przez zmienne.

// pobranie parametrów
function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['oprocentowanie'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
	$form['okres'] = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
	$form['m'] = 12;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){
// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['kwota']) && isset($form['oprocentowanie']) && isset($form['okres']))) 
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
return false;
	
		//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty kredytu';
if ( $form['oprocentowanie'] == "") $msgs [] = 'Nie podano oprocentowania kredytu';
if ( $form['okres'] == "") $msgs [] = 'Nie podano okresu kredytowania';


//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $msgs ) != 0) return false;
	
	// sprawdzenie, czy $k,$n,i $b są liczbami całkowitymi
	if (! is_numeric( $form['kwota'] )) $msgs [] = 'Kwota kredytu nie jest liczbą całkowitą';	
	if (! is_numeric( $form['oprocentowanie'] )) $msgs [] = 'Porcent oprocentowania nie jest liczbą całkowitą';		
	if (! is_numeric( $form['okres'] )) $msgs [] = 'Liczba miesięcy nie jest liczbą całkowitą';
		
	if (count ( $msgs ) != 0) return false;
	else return true;
}

// 3. wykonaj zadanie jeśli wszystko w porządku
	
function process(&$form,&$infos,&$msgs,&$rata){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	//konwersja parametrów na int
	
	$form['kwota'] = intval($form['kwota']);
	$form['oprocentowanie'] = floatval($form['oprocentowanie']);
	$form['okres'] = intval($form['okres']);
	$form['m']= 12;
	
		$rata = ($form['kwota']*(1+($form['oprocentowanie']/$form['m'])^$form['okres'])*(1+($form['oprocentowanie']/$form['m'])-1)/((1+($form['oprocentowanie']/$form['m'])^$form['okres'])-1));			
	
}	


//definicja zmiennych kontrolera
//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$rata = null;
//domyślnie pokazuj wstęp strony (tytuł i tło)
$hide_intro = false;


//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form,);
if ( validate($form,$infos,$messages,$hide_intro) ) { // gdy brak błędów
	process($form,$infos,$messages,$rata,);
}

//Wywołanie widoku, wcześniej ustalenie zawartości zmiennych elementów szablonu
$page_title = 'SYMULACJA';
$page_description = 'Oblicz swoją przewidywaną ratę kredytu.';
$page_header = 'Kalkulator kredytowy';
$page_footer = 'Kalkulator kredytowy stworzony przez Karolinę Kula';

include 'calc_view.php';