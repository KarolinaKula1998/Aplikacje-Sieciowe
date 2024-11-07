<?php
include _ROOT_PATH.'/templates/top.php';
?>

<h3>Prosty kalkulator kredytowy</h2>

<form class="pure-form pure-form-stacked" action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">
	<fieldset>
	<label for="kwota">Kwota kredytu o którą się ubiegasz </label>
	<input id="kwota" type="text" placeholder="kwota" name="kwota" value="<?php out($form['kwota']); ?>">
	<label for="oprocentowanie">Oprocentowanie kredytu w % </label>
	<input id="oprocentowanie" type="text" placeholder="oprocentowanie" name="oprocentowanie" value="<?php out($form['oprocentowanie']); ?>">
	<label for="okres">Czas kredytowania w miesiącach </label>
	<input id="okres" type="text" placeholder="okres" name="okres" value="<?php out($form['okres']); ?>"  >
	</fieldset>	
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>	

<div class="messages">

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
	echo '<h4>Wystąpiły błędy: </h4>';
	echo '<ol class="err">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php
//wyświeltenie listy informacji, jeśli istnieją
if (isset($infos)) {
	if (count ( $infos ) > 0) {
	echo '<h4>Informacje: </h4>';
	echo '<ol class="inf">';
		foreach ( $infos as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>


<?php if (isset($rata)){ ?>
	<h4>Wynik</h4>
	<p class="res">
<?php print($rata); ?>
	</p>
<?php } ?>

</div>

<?php //dół strony z szablonu 

include _ROOT_PATH.'/templates/bottom.php';

?>