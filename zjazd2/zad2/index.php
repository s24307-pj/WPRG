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
<form action="index.php" method="post">
    <label for="ilosc_osob">Ilość osób:</label>
    <select name="ilosc_osob" id="ilosc_osob">
        <option value="1">1 osoba</option>
        <option value="2">2 osoby</option>
        <option value="3">3 osoby</option>
        <option value="4">4 osoby</option>
    </select><br><br>

    <label for="imie">Imię:</label>
    <input type="text" id="imie" name="imie" required><br><br>

    <label for="nazwisko">Nazwisko:</label>
    <input type="text" id="nazwisko" name="nazwisko" required><br><br>

    <label for="adres">Adres:</label>
    <input type="text" id="adres" name="adres" required><br><br>

    <label for="karta_kredytowa">Dane karty kredytowej:</label>
    <input type="text" id="karta_kredytowa" name="karta_kredytowa" required><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="data_pobytu">Data pobytu:</label>
    <input type="date" id="data_pobytu" name="data_pobytu" required><br><br>

    <label for="godzina_przyjazdu">Godzina przyjazdu:</label>
    <input type="time" id="godzina_przyjazdu" name="godzina_przyjazdu" required><br><br>

    <label for="dostawka">Dostawka dla dziecka:</label>
    <input type="checkbox" id="dostawka" name="dostawka"><br><br>

    <label for="udogodnienia">Udogodnienia:</label>
    <select name="udogodnienia[]" id="udogodnienia" multiple>
        <option value="klimatyzacja">Klimatyzacja</option>
        <option value="popielniczka">Popielniczka</option>
    </select><br><br>

    <input type="submit" value="Zarezerwuj">
</form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ilosc_osob = $_POST["ilosc_osob"];
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $adres = $_POST["adres"];
    $karta_kredytowa = $_POST["karta_kredytowa"];
    $email = $_POST["email"];
    $data_pobytu = $_POST["data_pobytu"];
    $godzina_przyjazdu = $_POST["godzina_przyjazdu"];
    $dostawka = isset($_POST["dostawka"]) ? "Tak" : "Nie";
    $udogodnienia = $_POST["udogodnienia"];
    $osoby = [];

    echo "<h2>Podsumowanie rezerwacji:</h2>";

    echo "<h3>Osoba rezerwująca:</h3>";
    echo "<p>Imię i nazwisko: " . $imie . " " . $nazwisko . "</p>";
    echo "<p>Adres: " . $adres . "</p>";
    echo "<p>Numer karty kredytowej: **** **** **** " . substr($karta_kredytowa, -4) . "</p>";
    echo "<p>Email: " . $email . "</p>";

    echo "<h3>Rezerwacja:</h3>";
    echo "<p>Liczba osób: " . $ilosc_osob . "</p>";
    echo "<p>Data pobytu: " . $data_pobytu . "</p>";
    echo "<p>Godzina przyjazdu: " . $godzina_przyjazdu . "</p>";
    echo "<p>Dodatkowe udogodnienia:</p>";
    echo "<ul>";
    if (isset($_POST['klimatyzacja'])) {
        echo "<li>Klimatyzacja</li>";
    }
    if (isset($_POST['popielniczka'])) {
        echo "<li>Popielniczka dla palaczy</li>";
    }
    echo "</ul>";

    if (isset($_POST['lozko_dla_dziecka'])) {
        echo "<h3>Łóżko dla dziecka:</h3>";
        echo "<p>Potrzebne łóżko dla dziecka</p>";
    }

    if ($ilosc_osob > 1) {
        echo "<h3>Osoby podróżujące:</h3>";
        for ($i = 1; $i <= $ilosc_osob - 1; $i++) {
            echo "<h4>Osoba " . $i . ":</h4>";
            echo "<p>Imię i nazwisko: " . $imie . " " . $nazwisko . "</p>";
            echo "<p>Adres: " . $adres . "</p>";
        }
    }

}