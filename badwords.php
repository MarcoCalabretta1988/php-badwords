<?php
//Values ​​retrieved from the form of index
$bad_word = $_GET['badword'];
$text = $_GET['text'];

//censor the word

$censured_text = str_replace($bad_word, '***' , $text);

$original_length = strlen($text);
$filtredtext_length = strlen($censured_text);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
      <!-- IMPORT BOOTSRAP -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <!-- NOT FILTRED TEXT AND IS LENGHT -->
        <div class="border p-5 mb-3">
            <h1>Testo non censurato:</h1>
            <p><?=$text ?></p>
            <h4>Lunghezza testo: <span class="text-danger"><?= $original_length?> </span> </h4>
        </div>
          <!-- FILTRED TEXT AND IS LENGHT -->
        <div class="border p-5">
            <h1>Testo censurato:</h1>
            <p><?=$censured_text ?></p>
            <h4>Lunghezza testo: <span class="text-success"><?= $filtredtext_length?> </span> </h4>
        </div>
    </div>
</body>
</html>