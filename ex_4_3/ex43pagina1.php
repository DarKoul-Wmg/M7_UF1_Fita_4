<?php 
session_start();

if(isset($_GET['lletra'])){ //Si lletra al cargar
    if(!isset($_SESSION['text']) || $_GET['lletra'] == 'reset'){ //Si no hay info de texto en las coockies
        $_SESSION['text'] = " ";
    } else{
        $_SESSION['text'] .= $_GET['lletra']; // .= concatenar strings
    }
}

$text = $_SESSION['text'];
//pagina: 
echo"<h2>Màquina d'escriure</h2>";
echo"<textarea rows='5' cols='50' readonly>$text</textarea>";

echo'<p>Teclat</p>';

$alphabet = range('A','Z');
foreach ($alphabet as $lletra) {
    echo " [<a href='ex43pagina1.php?lletra=$lletra'>$lletra</a>] ";
}

echo "[<a href='ex43pagina1.php?lletra=reset'>esborrar</a>]"

?>

