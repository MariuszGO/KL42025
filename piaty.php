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

    if($i % 2 == 0){
                    echo "<p>$i</p>";
                    }
    $i++;   // altrernatywny zapis $i=$i+1   lub $i+=1;
}





?>


</body>
</html>