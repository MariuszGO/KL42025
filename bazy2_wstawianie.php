<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="bazy.css">
</head>
<body>
    <header>
<ul>
    <li>
        <a href="bazy2_formularz.html">Dodaj nowy pojazd</a>
    </li>
        <li>
        <a href="bazy2_wyswietlanie.php">Wyświetl dane</a>
    </li>
</header>
<section>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$marka = $_POST["marka"];
$model = $_POST["model"];
$cena = $_POST["cena"];

$polaczenie = mysqli_connect("localhost","root","","samochody");
$zapytanie = "Insert into pojazdy values (NULL,'$marka','$model',$cena)";
$zmienna = mysqli_query($polaczenie,$zapytanie);

if ($zmienna) echo "dane wysłano"; else echo "danych nie wysłano";

mysqli_close($polaczenie);

}

else{
    echo"brak danych";
}

?>


</section>
</body>
</html>