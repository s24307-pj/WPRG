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
        <label>Wpisz liczbę całkowitą dodatnią:</label>
        <input type="number" name="liczba" required>
        <button type="submit">Sprawdź</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['liczba']) && is_numeric($_POST['liczba']) && $_POST['liczba'] > 0 && $_POST['liczba'] == round($_POST['liczba'])) {
        $liczba = (int) $_POST['liczba'];

        if ($liczba == 1) {
            echo "1 nie jest liczbą pierwszą";
        } else {
            for ($i = 2; $i <= sqrt($liczba); $i++) {
                $licznik++;
                if ($liczba % $i == 0) {
                    echo "{$liczba} nie jest liczbą pierwszą";
                    break;
                }
            }
            if ($i > sqrt($liczba)) {
                echo "{$liczba} jest liczbą pierwszą";
            }
        }
    } else {
        echo "Nieprawidłowe dane wejściowe.";
    }
}