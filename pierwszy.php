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
        echo @$zmienna6 . "<br>"; //Wyświetlenie niezainicjowanej zmiennej (użycie @ aby uniknąć ostrzeżenia).
        echo $zmienna7[2] . "<br>"; //Wyświetlenie trzeciego elementu tablicy (indeksy zaczynają się od 0).

        $wynik = $zmienna1 + $zmienna2; //Operacja dodawania zmiennych.
        echo "Wynik dodawania: " . $wynik . "<br>";
        /* + sumowanie 
           - odejmowanie 
           * mnożenie 
           / dzielenie 
           % modulo (reszta z dzielenia) */

           $liczba_a = 8;
           $liczba_b = 3;
           $wynik = $liczba_a % $liczba_b;
           echo "Wynik modulo: " . $wynik . "<br>";

            $tekst1 = "Witaj, ";
            $tekst2 = "świecie!";
            $rok = 2025;
            $tekst_polaczony = $tekst1 . $tekst2 . " Mamy rok:" . $rok; //Łączenie
        
            echo $tekst_polaczony . "<br>";




    
            /*
            Komentarz wieloliniowy
            Drugi wiersz komentarza
            Trzeci wiersz komentarza
            */
 
 ?> <!--koniec skryptu PHP-->
    
</body>
</html>