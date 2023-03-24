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
<form method="post">
    <label for="a">Podaj liczbę z zakresu 1-12:</label>
    <input type="number" name="a" required><br>
    <input type="submit" name="submit" value="Sprawdź">
</form>

<?php
$a = $_POST['a'];
switch ($a) {
    case 1:
        echo "Styczeń, 31 dni";
        break;
    case 2:
        echo "Luty, 28 dni";
        break;
    case 3:
        echo "Marzec, 31 dni";
        break;
    case 4:
        echo "Kwiecień, 30 dni";
        break;
    case 5:
        echo "Maj, 31 dni";
        break;
    case 6:
        echo "Czerwiec, 30 dni";
        break;
    case 7:
        echo "Lipiec, 31 dni";
        break;
    case 8:
        echo "Sierpień, 31 dni";
        break;
    case 9:
        echo "Wrzesień, 30 dni";
        break;
    case 10:
        echo "Październik, 31 dni";
        break;
    case 11:
        echo "Listopad, 30 dni";
        break;
    case 12:
        echo "Grudzień, 31 dni";
        break;
    default:
        echo "BŁĄD";
        break;
}
?>
</body>
</html>