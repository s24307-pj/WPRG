<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="index.php">
    Napis 1: <input type="text" name="napis1"><br><br>
    Napis 2: <input type="text" name="napis2"><br><br>
    <input type="submit" value="Wyślij">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $napis1 = $_POST["napis1"];
    $napis2 = $_POST["napis2"];
    $wynik = '%' . $napis2 . ' ' . $napis1 . '%$#';
    echo $wynik;
}
?>
</body>
</html>