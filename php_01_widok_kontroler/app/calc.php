<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$k = $_REQUEST ['k'];
$b = $_REQUEST ['b'];
$n = $_REQUEST ['n'];
$m = 12;

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($k) && isset($b) && isset($n))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $k == "") {
	$messages [] = 'Nie podano kwoty kredytu  którą się ubiegasz';
}
//sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $b == "") {
	$messages [] = 'Nie podano oprocentowania kredytu';
}
if ( $n == "") {
	$messages [] = 'Nie podano czasu kredytowania (w miesiącach)';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $k, $b i $n są liczbami całkowitymi
	if (! is_numeric( $k )) {
		$messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $b )) {
		$messages [] = 'Oprocentowanie nie jest wartością całkowitą';
	}	
	
	if (! is_numeric( $n )) {
		$messages [] = 'Okres miesięcy nie jest liczbą całkowitą';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$k = intval($k);
	$b = intval($b);
	$n = intval($n);
	$m = intval($m);
	
$r = ($k*(1+($b/$m)^$n)*(1+($b/$m)-1)/((1+($b/$m)^$n)-1))/10;
	}

	
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';