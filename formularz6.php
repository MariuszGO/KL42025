<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
    <link rel="stylesheet" href="styl_formularz.css">
</head>
<body>
<?php
$ile = $_POST['ilosc'];
echo "<p>Z formularza została przesłana liczba: $ile </p>";


/*
Pobrane wartości minumum i maksimum mają być wykorzystane do losowania
Skrpt ma wyświeltać zadaną ilość liczb losowych od minimum do maksimum
Używamy funkcji random
*/


for($a=$ile;$a>=0;$a--){
    echo "<p> $a </p>";
}

echo "<hr>";

for($a=0;$a<=$ile;$a++){
    echo "<p> $a </p>";
}

?>


</body>
</html>