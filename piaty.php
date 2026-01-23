<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle</title>
</head>
<body>
    
<?php

$i = 0;
echo "<H1> PĘTLA DO WHILE </H1>";
do{
    echo "<p>$i</p>";
    $i=$i+2;     // $i+=2;
}while($i<=100);

echo "<H2>I ma wartosc  $i</H2>";

$i=0;
echo "<H2>I ma wartosc  $i</H2>";
echo "<H1> PĘTLA WHILE </H1>";
while($i<=100){

    if($i % 2 == 0){    //sprawdzanie czy liczba jest parzysta
                        //jeżeli reszta z dzielenia całkowitego jest równa 0 to liczba
                        //jest parzysta i zostanie wyświetlona w przeciwnym razie instrukcja
                        //wewnątrz if zostanie pominięta
                        //warunek czytamy "i modulo 2 czy jest równe 0"
                    echo "<p>$i</p>";
                    }
    $i++;   // altrernatywny zapis $i=$i+1   lub $i+=1;
}

echo "<H2>I ma wartosc  $i</H2>"; //jest równe 101
echo "<H1> PĘTLA FOR </H1>";

for($j=0;$j<$i;$j+=2){
    echo "<p>$j</p>";
}

$tablica = array(124,466,344,233,894,343,111,222,567);

echo "<H1> PĘTLA FOREACH (do obsługi tablic) </H1>";
foreach($tablica as $klucz){
    echo "<p>$klucz";
    if($klucz % 2 == 0){ 
        echo " To jest liczba parzysta";
        }
        else{
       echo " To jest liczba nie parzysta</p>";
            
        }
}
echo "<hr>";

for($i=0; $i<sizeof($tablica);$i++){   //sizeof liczy ile jest elementów w tablicy
        echo "<p>$tablica[$i]";
    if($tablica[$i] % 2 == 0){ 
        echo " To jest liczba parzysta";
        }
        else{
       echo " To jest liczba nie parzysta</p>";
            
        }
}




?>


</body>
</html>