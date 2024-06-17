<?php
$word = $_GET['word'];
$text = $_GET['text'];


// concatena la due elementi con uno spazio nel mezzo
echo $word . ' ' . $text;

// restituisce la lunghezza di una stringa
echo strlen($text);

// rimpiazza la parola contenuta nella stringa con il valore nel mezzo
echo str_replace($word, '***', $text);

// divide la stringa al punto del primo valore creando un array
echo explode(' ', $text);

// mi mostra il contenuto dell'array con le posizioni
var_dump(explode(' ', $text));

// mi da vero o falso se il secondo valore é contenuto nel primo
echo str_contains($text, $word);

// rende la prima lettera della stringa maiuscola
echo ucfirst($word);

// rende la prima lettera di ogni parola presente nella stringa maiuscola
echo ucwords($text);
