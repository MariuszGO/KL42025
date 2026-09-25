<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Losowanie liczb i sortowanie</title>
    <link rel="stylesheet" href="styl8.css">
</head>
<body>

<form action="formularz8.php" method="post">
    <label for="ile"> Ile chcesz wylosować</label>
    <input type = "number" id="ile" name="ile" min="1" require><br>
    <label for="od"> Od</label>
    <input type = "number" id="od" name="od" require value="10"><br>
    <label for="do"> Do</label>
    <input type = "number" id="do" name="do" require value="99"><br>
    <button>Losuj</button>


</form>


<?php
$ile = @$_POST['ile'];
$od = @$_POST['od'];
$do = @$_POST['do'];

    for($i=0;$i<$ile;$i++){

        $tablica[$i] = rand($od,$do);
        echo "<p>" . $tablica[$i] . " " . "</p>";
    } 

        for($i=0;$i<$ile;$i++){
            for($j=0;$j<$ile-1;$j++){
                                    if($tablica[$j]>$tablica[$j+1])
                                        {
                                            $tmp = $tablica[$j];
                                            $tablica[$j] = $tablica[$j+1];
                                            $tablica[$j+1]= $tmp;
                                        } 

                                    }
      
                                }

echo "<hr>";
    for($i=0;$i<$ile;$i++){
        echo "<p>" . $tablica[$i] . " " . "</p>";
    } 

?>

    
</body>
</html>