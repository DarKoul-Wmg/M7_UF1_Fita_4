<?php
session_start();

if(isset($_POST['text'])){
    if(!isset($_SESSION['text'])){ //Si no hay info de texto en las coockies
        $_SESSION['text'] = $_POST['text'];
    } else{
        // .= concatenar strings
        $_SESSION['text'] .= $_POST['text'];
        $_SESSION['text'] .= "\n\n";
    }
} else{
    $_SESSION['text'] = " ";
}

if (isset($_POST['reset'])) {
    $_SESSION['text'] = ''; // Reiniciar el contenido de la sesión
}

$text = $_SESSION['text'];

echo"   <form method='post' action='ex44pagina1.php'>
            <textarea name= 'text' rows='5' cols='50'>$text</textarea>
	        <input type='submit' value='Envia'>
            <input type='submit' name='reset' value='Reinicia'>
        </form>"

?>