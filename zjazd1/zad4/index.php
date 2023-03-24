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
    Bok a: <input type="number" name="a"><br>
    Bok b: <input type="number" name="b"><br>
    <input type="submit" name="submit" value="Oblicz">
</form>
<?php
$a = $_POST["a"];
$b = $_POST["b"];

if (is_numeric($a) && is_numeric($b)) {
    $suma = $a + $b;
    $roznica = $a - $b;
    $iloczyn = $a * $b;
    if ($b == 0) {
        $modulo = "Nie można dzielić przez zero";
    } else {
        $modulo = $a % $b;
    }
    echo "Wynik dodawania: " . $suma . "<br>";
    echo "Wynik odejmowania: " . $roznica . "<br>";
    echo "Wynik mnożenia: " . $iloczyn . "<br>";
    echo "Wynik dzielenia modulo: " . $modulo . "<br>";
} else {
    echo "Niepoprawne dane";
}
?>
</body>
</html>