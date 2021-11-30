<?php 
    $name = "";
    $email = "";
    $age = "";
    if(isset($_GET["name"]) && isset($_GET["name"]) && isset($_GET["name"])) {
        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = $_GET["age"];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 1</title>
    </head>
    <body>
        <header></header>
        <main>
            <h2>
                <?php 
                    if(strlen($name) > 3 && strrpos($email, '@') && strrpos($email, '.') && is_numeric($age)) {
                        $text = "Accesso riuscito";
                    } else {
                        $text = "Accesso negato";
                    }
                    echo $text;
                ?>
            </h2>
        </main>
        <footer></footer>
    </body>
</html>
