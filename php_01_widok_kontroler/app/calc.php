<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];
$okres = $_REQUEST ['okres'];
$m = 12;

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($oprocentowanie) && isset($okres))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty kredytu  którą się ubiegasz';
}
//sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania kredytu';
}
if ( $okres == "") {
	$messages [] = 'Nie podano czasu kredytowania (w miesiącach)';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $k, $b i $n są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Oprocentowanie nie jest wartością całkowitą';
	}	
	
	if (! is_numeric( $okres )) {
		$messages [] = 'Okres miesięcy nie jest liczbą całkowitą';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$oprocentowanie = floatval($oprocentowanie);
	$okres = intval($okres);
	$m = intval($m);
	
$rata = ($kwota*(1+($oprocentowanie/$m)^$okres)*(1+($oprocentowanie/$m)-1)/((1+($oprocentowanie/$m)^$okres)-1));
	}

	
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';