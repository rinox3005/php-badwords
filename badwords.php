<?php
$word = $_GET['word'];
$text = $_GET['text'];

// calcolo il testo censurato e lo assegno ad una nuova variabile
$censoredText = str_replace($word, '***', $text);

// // concatena la due elementi con uno spazio nel mezzo
// echo $word . ' ' . $text;

// // restituisce la lunghezza di una stringa
// echo strlen($text);

// // rimpiazza la parola contenuta nella stringa con il valore nel mezzo
// echo str_replace($word, '***', $text);

// // divide la stringa al punto del primo valore creando un array
// echo explode(' ', $text);

// // mi mostra il contenuto dell'array con le posizioni
// var_dump(explode(' ', $text));

// // mi da vero o falso se il secondo valore é contenuto nel primo
// echo str_contains($text, $word);

// // rende la prima lettera della stringa maiuscola
// echo ucfirst($word);

// // rende la prima lettera di ogni parola presente nella stringa maiuscola
// echo ucwords($text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <h1 class="text-center pt-5 pb-3 text-primary">Bad Word?</h1>
        <section class="container mt-4 m-auto row">
            <!-- testo non censurato -->
            <div class="col-6 border border-end-0 border-black p-4">
                <h2 class="text-center mb-5 text-success">Uncensored Text</h2>
                <h5 class="d-inline text-success">Word to censor:</h5>
                <span class="fs-6 fw-semibold">"<?php echo $word ?>"</span>
                <h5 class="mt-5 text-success">Text to check:</h5>
                <p class="fs-6 mb-5 fw-semibold">"<?php echo $text ?>"</p>
                <h5 class="d-inline text-success">Text length:</h5>
                <span class="fs-6 fw-semibold">"<?php echo strlen($text) ?>"</span>
            </div>
            <div class="col-6 border border-black p-4">
                <!-- testo censurato -->
                <h2 class="text-center mb-5 text-danger">Censored Text</h2>
                <h5 class="d-inline text-danger">Word to censor:</h5>
                <span class="fs-6 fw-semibold">"<?php echo $word ?>"</span>
                <h5 class="mt-5 text-danger">Text to check (censored):</h5>
                <p class="fs-6 mb-5 fw-semibold">"<?php echo $censoredText; ?>"</p>
                <h5 class="d-inline text-danger">Text length:</h5>
                <span class="fs-6 fw-semibold">"<?php echo strlen($censoredText) ?>"</span>
            </div>
        </section>
    </main>
</body>

</html>