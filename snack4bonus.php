<?php 
    $longParagraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ducimus voluptatem consectetur aliquam sequi saepe omnis ea nihil, voluptatibus cumque tempore necessitatibus praesentium ullam sunt ex? Molestias atque ab consequuntur!
    Error excepturi aspernatur cupiditate provident modi dolorem et. Soluta magnam dicta doloribus sed, architecto, inventore, repellendus voluptas eveniet quis animi nobis atque nostrum cum tenetur et possimus velit dolorem deserunt!
    Iusto ad eum cupiditate eligendi eos porro mollitia aspernatur dignissimos aliquam dolore. Quo voluptatibus harum fugit, accusamus vitae doloremque nostrum est magnam dolorem laboriosam nesciunt earum, veritatis sapiente ratione? Ullam.
    Nisi, aut perspiciatis itaque accusamus dolorum esse unde porro repellendus animi quos commodi incidunt voluptates magni soluta beatae, delectus saepe modi inventore sapiente adipisci fugiat dicta officia nam. Voluptate, dicta.";
    $definitiveParagraphArray = [];
    
    $paragraphArray = explode(".", $longParagraph);
    for ($i=0; $i < count($paragraphArray); $i++) { 
        if(!strrpos($paragraphArray[$i], '!') && !strrpos($paragraphArray[$i], '?')) {
            array_push($definitiveParagraphArray, $paragraphArray[$i]);
        } else {
            $newParagraph = explode("!", $paragraphArray[$i]);
            for ($j=0; $j < count($newParagraph); $j++)
            if(!strrpos($newParagraph[$j], '?')) {
                array_push($definitiveParagraphArray, $newParagraph[$j]); 
            } else {
                $newParagraph = explode("?", $newParagraph[$j]);
                for ($k=0; $k < count($newParagraph); $k++) { 
                    array_push($definitiveParagraphArray, $newParagraph[$j]); 
                }
            }
        }
    }

    echo "<pre>";
    var_dump($definitiveParagraphArray);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 4 bonus</title>
    </head>
    <body>
        
    </body>
</html>