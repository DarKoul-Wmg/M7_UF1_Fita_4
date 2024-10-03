<?php  
	session_start();
	$_SESSION['frase1'] = $_POST['frase1'];
?>
<p>ENREGISTRA FRASE 2</p>

<form method="post" action="ex42pagina3.php">
	<input type="text" name="frase2">
	<input type="submit" value="Envia">
</form>
