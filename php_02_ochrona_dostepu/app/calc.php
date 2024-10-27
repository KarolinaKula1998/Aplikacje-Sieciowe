<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

// pobranie parametrów
function getParams(&$kwota,&$oprocentowanie,&$okres){
 $kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
 $oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
 $okres = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
 $m = 12;
}

// walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$oprocentowanie,&$okres,&$messages){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($oprocentowanie) && isset($okres))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
return false;
	
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania kredytu';
}
if ( $okres == "") {
	$messages [] = 'Nie podano okresu kredytowania';
}


//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $k,$n,i $b są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
	}
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Porcent oprocentowania nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $okres )) {
		$messages [] = 'Liczba miesięcy nie jest liczbą całkowitą';
	}	
	if (count ( $messages ) != 0) return false;
	else return true;
}


// 3. wykonaj zadanie jeśli wszystko w porządku

	
function process(&$kwota,&$oprocentowanie,&$okres,&$messages,&$rata){
	global $role;
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$oprocentowanie = floatval($oprocentowanie);
	$okres = intval($okres);
	$m = 12;
	
	
	if ($role == 'manager' || ($role == 'user' && $oprocentowanie > 2)){
		$rata = ($kwota*(1+($oprocentowanie/$m)^$okres)*(1+($oprocentowanie/$m)-1)/((1+($oprocentowanie/$m)^$okres)-1));		
	} else {
		$messages [] = 'Tylko manager może obliczać raty kredytów z oprocentowaniem mniejszym lub równym 2% !';
	}	
	
}	


//definicja zmiennych kontrolera

$kwota = null;
$oprocentowanie = null;
$okres = null;
$rata = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota,$oprocentowanie,$okres,);
if ( validate($kwota,$oprocentowanie,$okres,$messages) ) { // gdy brak błędów
	process($kwota,$oprocentowanie,$okres,$messages,$rata,);

}
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$k,$b,$n,$r,)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';