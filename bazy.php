<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAZY</title>
</head>
<body>
<form action="bazy.php" method="post">
<label for="marka">Marka</label>
<input type="text" name="marka" id="marka"><br> 
<label for="model">Model</label>
<input type="text" name="model" id="model"><br>
<label for="cena">Cena</label>
<input type="number" name="cena" id="cena"><br>
<input type="submit" value="Wyślij">
</form>




<?php

 $polaczenie = mysqli_connect("localhost","root","","samochody");
   

$marka = $_POST["marka"];
$model = $_POST["model"];
$cena = $_POST["cena"];


//echo $marka." ".$model." ".$cena;

if (isset($marka) && isset($model) && isset($cena)) {
    $zapytanie = "Insert into pojazdy values (NULL,'$marka','$model',$cena)";
    $zmienna = mysqli_query($polaczenie,$zapytanie);
}
else {
    echo "brak danych";
}

$zapytanie1 = "Select * from pojazdy";
$zmienna1 = mysqli_query($polaczenie,$zapytanie1);
while ($wiersz = mysqli_fetch_array($zmienna1)) {
    echo $wiersz['marka']." ".$wiersz['model']." ".$wiersz['cena']."<br>";
} 

mysqli_close($polaczenie);
?>
    
</body>
</html>