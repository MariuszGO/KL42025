<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrukcje warunkowe i pętle</title>
</head>
<body>
    <h1>Instrukcje warunkowe i pętle</h1>
    <p>W tym pliku znajdziesz przykłady instrukcji warunkowych i pętli w PHP.</p>
    <?php
        $liczba = 6;
        // Instrukcja warunkowa if
        if ($liczba > 5) {
            echo "<p>Liczba $liczba jest większa niż 5.</p>";
        } 
        // Instrukcja warunkowa if-else
        $liczba1 = 8;

        if($liczba1 > 10) {
            echo "<p>Liczba $liczba1 jest większa niż 10.</p>";
        }
        
        else {
            echo "<p>Liczba $liczba1 jest mniejsza od 10.</p>";
        }

        $liczba2 = 122;
        // Instrukcja warunkowa if-elseif-else
        if($liczba2 < 15) {
            echo "<p>Liczba $liczba2 jest mniejsza niż 15.</p>";
        }
        elseif($liczba2 == 15 ) {
            echo "<p>Liczba $liczba2 jest równa 15.</p>";
        }
        else {
            echo "<p>Liczba $liczba2 jest większa niż 15.</p>";
        }
        //Przykłady z operatorami logicznymi
        //liczba większa od 10 i mniejsza od 20
        $liczba3 = 15;
        if($liczba3 > 10 && $liczba3 < 20) {
            echo "<p>Liczba $liczba3 jest większa od 10 i mniejsza od 20.</p>";
        }



        //Instrukcja switch
        $dzien_tygodnia = 13;
        switch($dzien_tygodnia) {
            case 1:
                echo "<p>Dzisiaj jest poniedziałek.</p>";
                echo "<p>To początek tygodnia.</p>";
                echo "<p>Miłego dnia!</p>";
                echo "Każdy lubi poniedziałki!";
                echo "<hr>";
                break;
            case 2:
                echo "<p>Dzisiaj jest wtorek.</p>";
                break;
            case 3:
                echo "<p>Dzisiaj jest środa.</p>";
                break;
            case 4:
                echo "<p>Dzisiaj jest czwartek.</p>";
                break;
            case 5:
                echo "<p>Dzisiaj jest piątek.</p>";
                break;
            case 6:
                echo "<p>Dzisiaj jest sobota.</p>";
                break;
            case 7:
                echo "<p>Dzisiaj jest niedziela.</p>";
                break;
            default:
                echo "<p>Podałeś wartość spoza zakresu.</p>"; 
                break;
            }

            //to samo na if-elseif-else
            if($dzien_tygodnia == 1) {
                echo "<p>Dzisiaj jest poniedziałek.</p>";
            }   
            elseif($dzien_tygodnia == 2) {
                echo "<p>Dzisiaj jest wtorek.</p>";
            }
            elseif($dzien_tygodnia == 3) {
                echo "<p>Dzisiaj jest środa.</p>";
            }
            elseif($dzien_tygodnia == 4) {
                echo "<p>Dzisiaj jest czwartek.</p>";
            }
            elseif($dzien_tygodnia == 5) {
                echo "<p>Dzisiaj jest piątek.</p>";
            }
            elseif($dzien_tygodnia == 6) {
                echo "<p>Dzisiaj jest sobota.</p>";
            }
            elseif($dzien_tygodnia == 7) {
                echo "<p>Dzisiaj jest niedziela.</p>";
            }
            else {
                echo "<p>Podałeś wartość spoza zakresu.</p>";
            }

            // && logiczny i 
            // || logiczny lub
            // ! negacja
            
            $a = true;
            $b = false;

            if($a && $b) {              
                echo "<p>Obie zmienne są prawdziwe.</p>";
            }
            else {
                echo "<p>Przynajmniej jedna ze zmiennych jest fałszywa.</p>";
            }

            if($a || $b) {
                echo "<p>Przynajmniej jedna ze zmiennych jest prawdziwa.</p>";
            }
            else {
                echo "<p>Obie zmienne są fałszywe.</p>";
            }

            if(!$b) {
                echo "<p>Zmienna b jest fałszywa.</p>";
            }
            else {
                echo "<p>Zmienna b jest prawdziwa.</p>";
            }
              echo "<h1>Przykłady pętli</h1>";
echo "<hr>";
          
        //Pętle
        //Pętla while
        //Warunek w petli while sprawdzany jest na początku. Jeśli warunek jest fałszywy, pętla nie wykona się ani razu.
        //Jeżeli warunek jest prawdziwy, pętla wykona się tak długo, aż warunek stanie się fałszywy.
        $i = 1;
        echo "<h2>Pętla while</h2>";
        while($i <= 5) {
            echo "<p>Wartość i wynosi: $i</p>";
            $i++; //inkrementacja $i=$i + 1
                    }

        //Pętla do-while
        //Warunek w pętli do-while sprawdzany jest na końcu. Oznacza to, że pętla wykona się przynajmniej raz, 
        //nawet jeśli warunek jest fałszywy. Taka jest różnica między pętlą while a do-while. Należy to zapamiętać.!!!  
        $j = 1;
        echo "<h2>Pętla do-while</h2>";
        do {
            echo "<p>Wartość j wynosi: $j</p>";
            $j++;
        } while($j <= 5);

            echo "<hr>";
            echo "<h1>Przykład z warunkiem fałszywym</h1>";
        //Wersja z warunkiem fałszywym
            $i = 1;
        echo "<h2>Pętla while</h2>";
        while($i >= 5) {
            echo "<p>Wartość i wynosi: $i</p>";
            $i++; //inkrementacja $i=$i + 1
                    }

         $j = 1;
        echo "<h2>Pętla do-while</h2>";
        do {
            echo "<p>Wartość j wynosi: $j</p>";
            $j++;
        } while($j >= 5);
echo "<hr>";
        //Pętla for
        echo "<h2>Pętla for</h2>";  
        for($k = 1; $k <= 5; $k++) {
            echo "<p>Wartość k wynosi: $k</p>";
        }

        echo "<h2>Pętla for co 3</h2>";
        for($i=0; $i<100; $i+=3) {
            echo "<p>Wartość i wynosi: $i</p>";
        }

        ?>

        
</body>
</html>