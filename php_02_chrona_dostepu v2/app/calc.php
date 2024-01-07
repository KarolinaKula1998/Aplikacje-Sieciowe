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
function getParams(&$k,&$b,&$n){
 $k = isset($_REQUEST['k']) ? $_REQUEST['k'] : null;
 $b = isset($_REQUEST['b']) ? $_REQUEST['b'] : null;
 $n = isset($_REQUEST['n']) ? $_REQUEST['n'] : null;
 $m = 12;
}

// walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$k,&$b,&$n,&$messages){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($k) && isset($b) && isset($n))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
return false;
	
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $k == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $b == "") {
	$messages [] = 'Nie podano oprocentowania kredytu';
}
if ( $n == "") {
	$messages [] = 'Nie podano liczby rat w miesiącach';
}


//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $k,$n,i $b są liczbami całkowitymi
	if (! is_numeric( $k )) {
		$messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
	}
	if (! is_numeric( $b )) {
		$messages [] = 'Porcent oprocentowania nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $n )) {
		$messages [] = 'Liczba miesięcy nie jest liczbą całkowitą';
	}	
	if (count ( $messages ) != 0) return false;
	else return true;
}


// 3. wykonaj zadanie jeśli wszystko w porządku

	
	function process(&$k,&$b,&$n,&$messages,&$r){
	global $role;
	//konwersja parametrów na int
	$k = intval($k);
	$b = intval($b);
	$n = intval($n);
	$m = 12;
	$r = ($k*(1+($b/$m)^$n)*(1+($b/$m)-1)/((1+($b/$m)^$n)-1))/10;
		echo "Twoja rata kredytu wynosi " . $r ; 
	

	}


//definicja zmiennych kontrolera

$k = null;
$b = null;
$n = null;
$r = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($k,$b,$n,);
if ( validate($k,$b,$n,$messages) ) { // gdy brak błędów
	process($k,$b,$n,$messages,$r,);

}
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$k,$b,$n,$r,)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';