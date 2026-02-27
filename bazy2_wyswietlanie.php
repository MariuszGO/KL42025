<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyświetlanie danych z bazy samochody</title>
</head>
<body>

<?php

 $polaczenie = mysqli_connect("localhost","root","","samochody");
 $zapytanie= "Select * from pojazdy";
 $wynik = mysqli_query($polaczenie,$zapytanie);
 
 
 ?>
    
</body>
</html>