<p>ENDEvINA EL NOMBRE</p>
<?php
	session_start();
	echo "Num ocult: ";
	echo $_SESSION['ocult'];

	$_SESSION['endevina'] = $_POST['endevina'];

	if (!isset($_SESSION['endevina'])) {
		$_SESSION['endevina'] = null;
	}

	if(!isset($_POST['endevina'])){
		echo'<form method="post" action="ex41pagina3.php">
			  	<input type="number" name="endevina">
				<input type="submit" name="enregistra">
			</form>';
	} else{

		if($_SESSION['endevina'] == $_SESSION['ocult']){
			echo'<h1> Felicitats !!! </h1> <br/>
			 <a href="ex41pagina1.php">Tornar a inici<a/>';

		}else{
			if($_SESSION['endevina'] < $_SESSION['ocult']) {
				echo"<h3>NUMERO MES PETIT QUE EL NUMERO OCULT</h3>";
			}else{
				echo"<h3>NUMERO MES GRAN QUE EL NUMERO OCULT</h3>";
				
			}
			echo '<form method="post" action="ex41pagina3.php">
					<input type="number" name="endevina">
					<input type="submit" name="endevinar">
			 	  </form>';
		}
	}
?>



