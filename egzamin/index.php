<?php

$polaczenie = mysqli_connect("localhost","root","","przewozy");

if(!$polaczenie){
    echo "Błąd";
}



echo"<form method='get'>";
echo"<label for='zadanie'> Zadanie do wykonania</label>";
echo "<input type='text' name='zadanie' id='zadanie'><br>";
echo"<label for='data_zadania'> Data</label>";
echo "<input type='date' name='data_zadania' id='data_zadania'><br>";
echo "<button type='submit'>Dodaj</button>";
echo "</form>";



if(isSet($_GET['zadanie']) && $_GET['data_zadania']){
    $zadanie = $_GET['zadanie'];
    $data = $_GET['data_zadania'];
   // echo $zadanie . " " . $data;


   $dodawanie = "INSERT INTO `zadania`(`id_zadania`, `zadanie`, `data`, `osoba_id`) VALUES (null,'$zadanie','$data',1)";
    mysqli_query($polaczenie,$dodawanie);
   }




if(isSet($_GET['numer'])){
    $id = $_GET['numer'];
    $usuwanie = "DELETE FROM przewozy.zadania WHERE id_zadania = $id";
    $informacja = mysqli_query($polaczenie,$usuwanie);
    if($informacja){
    echo "Dane usunięte";
    }

    }

$zapytanie = "Select id_zadania, zadanie , data from zadania";

$wynik = mysqli_query($polaczenie,$zapytanie);

echo "<table>";
echo "<tr><th>Zadania do wykonania</th><th>Data realizacji</th><th>akcja</th></tr>";
while($dane = mysqli_fetch_array($wynik)){
    $id = $dane['id_zadania'];
    echo "<tr><td>" .$dane['zadanie'] . "</td><td>" .$dane['data']." </td><td><a href='index.php?numer=$id'>Akcja</a></td></tr>";


}

echo "</table>";



mysqli_close($polaczenie);

?>