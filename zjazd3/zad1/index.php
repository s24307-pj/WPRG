<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
<form method="post">
    <label for="liczba1">Liczba 1:</label>
    <input type="number" name="liczba1" id="liczba1" required>
    <br>
    <label for="liczba2">Liczba 2:</label>
    <input type="number" name="liczba2" id="liczba2" required>
    <br>
    <label for="dzialanie">Działanie:</label>
    <select name="dzialanie" id="dzialanie">
        <option value="dodawanie">Dodawanie</option>
        <option value="odejmowanie">Odejmowanie</option>
        <option value="mnozenie">Mnożenie</option>
        <option value="dzielenie">Dzielenie</option>
    </select>
    <br>
    <button type="submit">Oblicz</button>
</form>
<?php
require_once('functions.php');

if(isset($_POST['liczba1']) && isset($_POST['liczba2']) && isset($_POST['dzialanie'])) {
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $dzialanie = $_POST['dzialanie'];

    switch ($dzialanie) {
        case 'dodawanie':
            $wynik = dodaj($liczba1, $liczba2);
            break;
        case 'odejmowanie':
            $wynik = odejmij($liczba1, $liczba2);
            break;
        case 'mnozenie':
            $wynik = pomnoz($liczba1, $liczba2);
            break;
        case 'dzielenie':
            $wynik = podziel($liczba1, $liczba2);
            break;
    }

    echo "<p>Wynik działania to: $wynik</p>";
}
?>
</body>
</html>
