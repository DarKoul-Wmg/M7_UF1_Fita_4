<p>COINCIDENCIES<p>

 <a href="ex42pagina1.php">Pagina 1</a>
 <br/>

<?php 
	session_start();
	$_SESSION['frase2'] = $_POST['frase2'];

	$frase1 = explode(" ",$_SESSION['frase1']);
	$frase2 = explode(" ",$_SESSION['frase2']);
	$contador = 0;

	foreach ($frase1 as $word) {
    if (in_array($word, $frase2) !== false) {
        echo "<p>- La paraula '$word' està a les dues frases.</p>";
        $contador +=1;
    	}
	}
	if($contador == 0){
		echo "<p>No hi ha cap coincidència.</p>";
	}
?>