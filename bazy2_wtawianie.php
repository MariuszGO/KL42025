<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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



</body>
</html>