<p>ENREGISTRA FRASE 2</p>

<?php  
	session_start();
	$_SESSION['ocult'] = $_POST['frase1'];

	echo'<form method="post" action="ex42pagina3.php">
	<input type="text" name="frase2">
	<input type="submit" value="Envia">
	</form>';
?>

