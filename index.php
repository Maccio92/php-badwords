<?php
$text = 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.';
$userText = $_GET["usertext"];
$censored = str_ireplace($userText, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Original text</h2>
    <h4><?=$text?></h4>
    <p>Lunghezza della stringa: <?= strlen($text)?>;</p>
    
    <h2>Censored Text:</h2>
    <h4><?=$censored?></h4>
    <p>Lunghezza della stringa: <?= strlen($censored)?>;</p>
    
</body>
</html>