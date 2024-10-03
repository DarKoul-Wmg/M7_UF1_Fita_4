
<p> Nombre enregistrat</p>

<?php 
  //no hace falta pasar parametro oculto a la siguiente pagina porque la cookie se queda en el navegador
	session_start();

	$_SESSION['ocult'] = $_POST['ocult'];

 ?>

<a href="ex41pagina3.php">Endevinar<a/>