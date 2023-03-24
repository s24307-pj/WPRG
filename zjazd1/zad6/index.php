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
    <label for="a">Podaj długość boku a:</label>
    <input type="number" name="a" required><br>
    <label for="b">Podaj długość boku b:</label>
    <input type="number" name="b" required><br>
    <label for="c">Podaj długość boku c:</label>
    <input type="number" name="c" required><br>
    <input type="submit" name="submit" value="Sprawdź">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "<p>Można zbudować trójkąt o bokach $a, $b, $c.</p>";
    } else {
        echo "<p>BŁĄD: Nie można zbudować trójkąta o bokach $a, $b, $c.</p>";
    }
}
?>
</body>
</html>