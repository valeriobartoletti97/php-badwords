<?php
$text = $_GET["textarea"];
$badWord = $_GET["bad-word"];
$textCensored = str_replace($badWord, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Php BadWords</title>
</head>
<body>
    <h1 class="text-center my-3 text-uppercase">Il tuo testo censurato:</h1>
    <p class="text-center"><?php echo $textCensored ?></p>
</body>
</html>