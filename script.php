<?php

// variabili che prendono valore dal fil index.html
$paragraph = $_GET['paragraph'];
$word = $_GET['word']; 

// stampo la lunghezza del paragrafo
echo strlen($paragraph);

// assegno una nuova variabile e sostituisco una parola con i tre asterisco
$new_value = str_replace($word, '***', $paragraph);

// stampo la nuova lunghezza del paragrafo
echo $new_value, strlen($new_value);


?>

