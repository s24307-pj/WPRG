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
    <input type="submit" name="submit" value="Oblicz">
</form>
<?php
$a = $_POST["a"];
if (isset($a)) {
    echo "Pierwiastek z " . $a . "to " . round(sqrt($a), 2);
}
?>
</body>
</html>