<?php 
session_start();

if (isset($_POST['frase2'])) {
    $_SESSION['frase2'] = $_POST['frase2'];
}

if (isset($_SESSION['frase1'])) {
    $frase1 = $_SESSION['frase1'];
} else {
    $frase1 = '';
}

if (isset($_SESSION['frase2'])) {
    $frase2 = $_SESSION['frase2'];
} else {
    $frase2 = '';
}

$frase1_array = explode(" ", $frase1);
$frase2_array = explode(" ", $frase2);
$contador = 0;

?>

<p>COINCIDENCIES</p>

<a href="ex42pagina1.php">Pagina 1</a>
<br/>

<?php
// Comparar las palabras de ambas frases
foreach ($frase1_array as $word) {
    if (in_array($word, $frase2_array)) {
        echo "<p>- La paraula '$word' està a les dues frases.</p>";
        $contador++;
    }
}

if ($contador == 0) {
    echo "<p>No hi ha cap coincidència.</p>";
}
?>
