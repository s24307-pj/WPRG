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
    <label for="number1">Liczba 1:</label>
    <input type="number" name="a" required><br><br>
    <label for="number2">Liczba 2:</label>
    <input type="number" name="b" required><br><br>
    <label for="number3">Liczba 3:</label>
    <input type="number" name="c" required><br><br>
    <input type="submit" value="Sortuj">
</form>

<?php
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
    $liczba1 = $_POST['a'];
    $liczba2 = $_POST['b'];
    $liczba3 = $_POST['c'];

    // Sortowanie od najmniejszej do największej
    if ($liczba1 > $liczba2) {
        $tmp = $liczba1;
        $liczba1 = $liczba2;
        $liczba2 = $tmp;
    }
    if ($liczba2 > $liczba3) {
        $tmp = $liczba2;
        $liczba2 = $liczba3;
        $liczba3 = $tmp;
    }
    if ($liczba1 > $liczba2) {
        $tmp = $liczba1;
        $liczba1 = $liczba2;
        $liczba2 = $tmp;
    }
    echo "Liczby w kolejności od najmniejszej do największej: $liczba1, $liczba2, $liczba3<br>";

    if ($liczba1 < $liczba2) {
        $tmp = $liczba1;
        $liczba1 = $liczba2;
        $liczba2 = $tmp;
    }
    if ($liczba2 < $liczba3) {
        $tmp = $liczba2;
        $liczba2 = $liczba3;
        $liczba3 = $tmp;
    }
    if ($liczba1 < $liczba2) {
        $tmp = $liczba1;
        $liczba1 = $liczba2;
        $liczba2 = $tmp;
    }
    echo "Liczby w kolejności od najmniejszej do największej: $liczba1, $liczba2, $liczba3<br>";
}
?>
</body>
</html>