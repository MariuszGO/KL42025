<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
for($i=0;$i<10;$i++){

    $imie= "JAN" . $i;

echo "<a href='dwa.php?id=$i&imie=$imie' > link$i</a> <br>";
}
?>

</body>
</html>