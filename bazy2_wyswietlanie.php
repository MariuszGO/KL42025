<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bazy.css">
    <title>Wyświetlanie danych z bazy samochody</title>

</head>
<body>

<?php

 $polaczenie = mysqli_connect("localhost","root","","samochody");
 $zapytanie= "Select * from pojazdy";
 $zapytanie1= "JAN";
 $wynik = mysqli_query($polaczenie,$zapytanie);
 //$wynik = mysqli_query($polaczenie,"Select * from pojazdy"); //to samo co wyżej w inny sposób
 
 echo "<table>";
 echo "<tr>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
       </tr>";

 // Sposób 1
//   while($wiersz = mysqli_fetch_array($wynik)){
//    echo "<tr><td>" . $wiersz['marka'] . "</td><td>" . $wiersz['model'] . "</td><td>" . $wiersz['cena'] . "</td></tr>";
 
//       }

//sposób 2
      while($wiersz = mysqli_fetch_array($wynik)){
        $marka = $wiersz['marka'];
        $mod = $wiersz['model'];
        $c = $wiersz['cena'];
  
      echo "<tr>
             <td>$marka</td>
             <td>$mod</td>
             <td>$c</td>
            </tr>";
 
     }


    echo "</table>";
 
 ?>
    
</body>
</html>