<?php 
    $randomArray = [];
    while (count($randomArray) < 15) {
        $randomNumber = rand(0, 15);
        if(!array_search($randomNumber, $randomArray)) {
            array_push($randomArray, $randomNumber);
        }
    }
    echo "<pre>";
    var_dump($randomArray);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 3</title>
    </head>
    <body>
        
    </body>
</html>