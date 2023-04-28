<!DOCTYPE html>
<html>
<head>
    <title>Formularz zapisujący do pliku</title>
</head>
<body>
<form method="post">
    <label for="imie">Imię:</label>
    <input type="text" name="imie" id="imie" required>
    <br>
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" name="nazwisko" id="nazwisko" required>
    <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <button type="submit" name="zapisz">Zapisz</button>
</form>
<?php
if(isset($_POST['zapisz'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $dane = "$imie $nazwisko $email\n";

    $plik = fopen("dane.txt", "a");
    fwrite($plik, $dane);
    fclose($plik);

    echo "<p>Dane zostały zapisane do pliku.</p>";
}
?>
</body>
</html>
