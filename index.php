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
    <form class="" action="response.php" method="GET">
        <div class="m-3 text-center" >
            <input id="bad-word" type="text" placeholder="Inserisci una parola da censurare" class="text-center" name="bad-word">
        </div>
        <div class="mb-3 text-center">
            <textarea name="textarea" id="textarea" cols="70" rows="10" placeholder="Inserisci qui il testo" maxlength="1000" class="p-3" name="text-area"></textarea>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" type="submit">Send</button>
        </div>
    </form>
</body>
</html>