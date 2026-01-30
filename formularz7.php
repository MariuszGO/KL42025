<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz imie, nazwisko, wiek</title>
</head>
<body>



    
<?php

    // znak @ powiduje ze w sytuacji braku przypisania w formularzu wartości do $_GET['imie']
    //nie będzie wyświwetlane ostrzeżenie 
   
    $nasze_imie = @$_GET['imie'];
    $nazwisko = @$_GET['nazwisko'];
    $wiek = @$_GET['w'];

    $ch1 = @$_GET['ch1'];

    

    //Sprawdzanie czy imię, nazwisko, wiek są ustawione i nie są puste
    if (isset($nasze_imie) && isset($nazwisko) && isset($wiek) && $nasze_imie!="" && $nazwisko!="" && $wiek != ""){
    echo "<H1><br>Masz na imię: $nasze_imie <br> Masz na nazwisko: $nazwisko<br>
           Masz: $wiek lat </H1>";
   echo "Wrtość ch1 to : $ch1";
           }

    // alternatwyne rozwiązanie problemu z wyświetlaniem ostrzeżenia 
    // if(isset($_GET['imie'])){
    // $nasze_imie = $_GET['imie'];
    // echo "<H1>$nasze_imie</H1>";
    // }






    

?>
<form>
    <label for="imie">Imie:</label>
   <?php echo "<input type='text' id='imie' name='imie' value='$nasze_imie'><br>"?>
    <label for="naz">Nazwisko:</label>
    <input type="text" id="naz" name="nazwisko" value="KOWALSKI"><br>
    <label for="Wiek">Wiek:</label>
    <input type="number" min="0" max="150" id="wiek" name="w" value="22"><br>
    <label for="test"> To jest test</label>
    <input type="checkbox" name="ch1" id="test" value="wartosc1">
    <button>Wyślij</button>
</form>

</body>
</html>