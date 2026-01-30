<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz imie, nazwisko, wiek</title>
</head>
<body>

<form>
    <label for="imie">Imie:</label>
    <input type="text" id="imie" name="imie">
    <button>Wyślij</button>
</form>

    
<?php

    // znak @ powiduje ze w sytuacji braku przypisania w formularzu wartości do $_GET['imie']
    //nie będzie wyświwetlane ostrzeżenie 
    $nasze_imie = @$_GET['imie'];
    echo "<H1>$nasze_imie</H1>";


    // alternatwyne rozwiązanie problemu z wyświetlaniem ostrzeżenia 
    // if(isset($_GET['imie'])){
    // $nasze_imie = $_GET['imie'];
    // echo "<H1>$nasze_imie</H1>";
    // }






    

?>


</body>
</html>