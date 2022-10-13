
<?php

 $ParolaUtente = $_GET['word'];


$paragrafo = "Fin che la barca va, lasciala affondare";


$lunghezza = strlen($paragrafo);

$censoredParagrafo = str_ireplace($ParolaUtente, '***', $paragrafo);
$censoredLenght = strlen($censoredParagrafo);

?>




<div>
    <h3>Parola: </h3>              <p><?= $paragrafo ?></p> 
    <h3>lunghezza parola: </h3>    <p><?= $lunghezza ?></p>
    <h3>Parola dell'utente</h3>    <p><?= $ParolaUtente ?></p>
    <h3>Parola censurata</h3>      <p><?= $censoredParagrafo ?></p>
</div>



