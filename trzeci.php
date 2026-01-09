<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pobieranie z formularza do skryptu PHP</title>
</head>
<body>

<!-- Formularz HTML wysyłający dane metodą POST do skryptu trzeci.php 
Mamy dwie metody wysyłania danych: GET i POST. W tym przykładzie używamy metody POST, 
która jest bardziej bezpieczna do przesyłania danych, ponieważ dane nie są widoczne w URL.     
-->

<form action="trzeci.php" method="post">
    <label for="liczba1">Podaj liczbę 1:</label>
    <input type="number" id="liczba1" name="liczba1"><br><br>
    <label for="liczba2">Podaj liczbę 2:</label>
    <input type="number" id="liczba2" name="liczba2"><br><br>
    <input type="submit" value="Wyślij">
</form>


<?php
$liczba1 =  $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];


echo $liczba1 . " " . $liczba2;

$wynik = $liczba1 + $liczba2;

echo "<p>Wynik dodawania: " . $wynik . "</p>";
?>

</body>
</html>