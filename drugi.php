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



        ?>
</body>
</html>