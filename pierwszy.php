<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php   //początek skryptu PHP
        echo "Witaj w świecie PHP!" . " Drugi wiersz tekst<br> " . "Trzeci wiersz".  "<br>"; //Łancuchy tekstowe łączymy za pomocą kropki.
        $zmienna1 = 10; //Przypisanie wartości do zmiennej, zmienna zaczyna się od znaku $ i ma typ całkowity.
        $zmienna2 = 5.5; //Zmienna z wartością zmiennoprzecinkową.
        $zmienna3 = "To jest tekst"; //Zmienna z łańcuchem tekstowym.
        $zmienna4 = true; //Zmienna logiczna (prawda/fałsz).
        $zmienna5 = null; //Zmienna z wartością null.
        $zmienna6; //Zmienna niezainicjowana.
        $zmienna7 = array(1, 2, 3, 4, 5); //Tablica z wartościami całkowitymi.
        echo $zmienna1 . "<br>"; //Wyświetlenie wartości zmiennej.
        echo $zmienna2 . "<br>";    
        echo $zmienna3 . "<br>";
        echo $zmienna4 . "<br>";
        echo $zmienna5 . "<br>";
        echo $zmienna6 . "<br>";
        echo $zmienna7[2] . "<br>"; //Wyświetlenie trzeciego elementu tablicy (indeksy zaczynają się od 0).

        
    
            /*
            Komentarz wieloliniowy
            Drugi wiersz komentarza
            Trzeci wiersz komentarza
            */
 
 ?> <!--koniec skryptu PHP-->
    
</body>
</html>