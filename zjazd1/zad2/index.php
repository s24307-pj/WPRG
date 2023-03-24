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
<!--ZAD 2-->
<!--<form method="post" action="index.php">-->
<!--    Bok a: <input type="number" name="a"><br>-->
<!--    Bok b: <input type="number" name="b"><br>-->
<!--    <input type="submit" name="submit" value="Oblicz">-->
<!--</form>-->
<?php
//if (isset($_POST["a"]) && isset($_POST["b"])) {
//    $a = $_POST["a"];
//    $b = $_POST["b"];
//    $pole = $a * $b;
//    echo "Pole prostokąta o bokach $a i $b wynosi: $pole";
//}
//?>
<!--ZAD3-->
<!--<form method="post" action="index.php">-->
<!--    Bok a: <input type="number" name="a"><br>-->
<!--    <input type="submit" name="submit" value="Oblicz">-->
<!--</form>-->
<?php
//$a = $_POST["a"];
//if (isset($a)) {
//    echo "Pierwiastek z " . $a . "to " . round(sqrt($a), 2);
//}
//?>
<!--ZAD4-->
<!--<form method="post" action="index.php">-->
<!--    Bok a: <input type="number" name="a"><br>-->
<!--    Bok b: <input type="number" name="b"><br>-->
<!--    <input type="submit" name="submit" value="Oblicz">-->
<!--</form>-->
<?php
//$a = $_POST["a"];
//$b = $_POST["b"];
//
//if (is_numeric($a) && is_numeric($b)) {
//    $suma = $a + $b;
//    $roznica = $a - $b;
//    $iloczyn = $a * $b;
//    if ($b == 0) {
//        $modulo = "Nie można dzielić przez zero";
//    } else {
//        $modulo = $a % $b;
//    }
//    echo "Wynik dodawania: " . $suma . "<br>";
//    echo "Wynik odejmowania: " . $roznica . "<br>";
//    echo "Wynik mnożenia: " . $iloczyn . "<br>";
//    echo "Wynik dzielenia modulo: " . $modulo . "<br>";
//} else {
//    echo "Niepoprawne dane";
//}
//?>
<!--<form method="post" action="index.php">-->
<!--    Napis 1: <input type="text" name="napis1"><br><br>-->
<!--    Napis 2: <input type="text" name="napis2"><br><br>-->
<!--    <input type="submit" value="Wyślij">-->
<!--</form>-->
<!---->
<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $napis1 = $_POST["napis1"];
//    $napis2 = $_POST["napis2"];
//    $wynik = '%' . $napis2 . ' ' . $napis1 . '%$#';
//    echo $wynik;
//}
//?>
<!--<form method="post">-->
<!--    <label for="a">Podaj długość boku a:</label>-->
<!--    <input type="number" name="a" required><br>-->
<!--    <label for="b">Podaj długość boku b:</label>-->
<!--    <input type="number" name="b" required><br>-->
<!--    <label for="c">Podaj długość boku c:</label>-->
<!--    <input type="number" name="c" required><br>-->
<!--    <input type="submit" name="submit" value="Sprawdź">-->
<!--</form>-->
<!---->
<?php
//if (isset($_POST['submit'])) {
//    $a = $_POST['a'];
//    $b = $_POST['b'];
//    $c = $_POST['c'];
//
//    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
//        echo "<p>Można zbudować trójkąt o bokach $a, $b, $c.</p>";
//    } else {
//        echo "<p>BŁĄD: Nie można zbudować trójkąta o bokach $a, $b, $c.</p>";
//    }
//}
//?>
<!--<form method="post">-->
<!--    <label for="a">Podaj liczbę z zakresu 1-12:</label>-->
<!--    <input type="number" name="a" required><br>-->
<!--    <input type="submit" name="submit" value="Sprawdź">-->
<!--</form>-->
<!---->
<?php
//$a = $_POST['a'];
//switch ($a) {
//    case 1:
//        echo "Styczeń, 31 dni";
//        break;
//    case 2:
//        echo "Luty, 28 dni";
//        break;
//    case 3:
//        echo "Marzec, 31 dni";
//        break;
//    case 4:
//        echo "Kwiecień, 30 dni";
//        break;
//    case 5:
//        echo "Maj, 31 dni";
//        break;
//    case 6:
//        echo "Czerwiec, 30 dni";
//        break;
//    case 7:
//        echo "Lipiec, 31 dni";
//        break;
//    case 8:
//        echo "Sierpień, 31 dni";
//        break;
//    case 9:
//        echo "Wrzesień, 30 dni";
//        break;
//    case 10:
//        echo "Październik, 31 dni";
//        break;
//    case 11:
//        echo "Listopad, 30 dni";
//        break;
//    case 12:
//        echo "Grudzień, 31 dni";
//        break;
//    default:
//        echo "BŁĄD";
//        break;
//}
//?>
<!--<form method="post">-->
<!--    <label for="number1">Liczba 1:</label>-->
<!--    <input type="number" name="a" required><br><br>-->
<!--    <label for="number2">Liczba 2:</label>-->
<!--    <input type="number" name="b" required><br><br>-->
<!--    <label for="number3">Liczba 3:</label>-->
<!--    <input type="number" name="c" required><br><br>-->
<!--    <input type="submit" value="Sortuj">-->
<!--</form>-->
<!---->
<?php
//if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
//    $liczba1 = $_POST['a'];
//    $liczba2 = $_POST['b'];
//    $liczba3 = $_POST['c'];
//
//    // Sortowanie od najmniejszej do największej
//    if ($liczba1 > $liczba2) {
//        $tmp = $liczba1;
//        $liczba1 = $liczba2;
//        $liczba2 = $tmp;
//    }
//    if ($liczba2 > $liczba3) {
//        $tmp = $liczba2;
//        $liczba2 = $liczba3;
//        $liczba3 = $tmp;
//    }
//    if ($liczba1 > $liczba2) {
//        $tmp = $liczba1;
//        $liczba1 = $liczba2;
//        $liczba2 = $tmp;
//    }
//    echo "Liczby w kolejności od najmniejszej do największej: $liczba1, $liczba2, $liczba3<br>";
//
//    if ($liczba1 < $liczba2) {
//        $tmp = $liczba1;
//        $liczba1 = $liczba2;
//        $liczba2 = $tmp;
//    }
//    if ($liczba2 < $liczba3) {
//        $tmp = $liczba2;
//        $liczba2 = $liczba3;
//        $liczba3 = $tmp;
//    }
//    if ($liczba1 < $liczba2) {
//        $tmp = $liczba1;
//        $liczba1 = $liczba2;
//        $liczba2 = $tmp;
//    }
//    echo "Liczby w kolejności od najmniejszej do największej: $liczba1, $liczba2, $liczba3<br>";
//}
//?>
</body>
</html>