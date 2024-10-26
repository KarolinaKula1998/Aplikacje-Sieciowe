<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_k">Kwota kredytu o którą się ubiegasz </label>
	<input id="id_k" type="text" name="k" value="<?php print($k); ?>" /><br />
	<label for="id_b">Oprocentowanie kredytu w % </label>
	<input id="id_b" type="text" name="b" value="<?php print($b); ?>" /><br />
	<label for="id_n">Czas kredytowania w miesiącach </label>
	<input id="id_n" type="text" name="n" value="<?php print($n); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	


<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($r)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wysokość raty miesięcznej: '.$r; ?>
</div>
<?php } ?>

</body>
</html