<?php
    //Consegna:
    //Stampare a schermo una decina di dischi musicali che troverete nel database.php
    require __DIR__ . '/partials/dataBase.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Php ajax dischi</title>
</head>
<body>
    <div class="box-fluid">
        <div class="box">
            <?php 
                foreach($db as $vinyl) {
                    echo 
                        '<div class="box-vinyl">' 
                        
                                .'<div class= "box-vinyl-top" >'
                                    . "<img src='$vinyl[poster]'>"
                                .'</div>'
                                .'<div class= "box-vinyl-bottom" >'
                                    .'<h1>' .$vinyl['title'] .'</h1>'
                                    .'<p>' .$vinyl['genre'] .'</p>'
                                    .'<p>' .$vinyl['year'] .'</p>'
                                .'</div>'
                        
                        .'</div>' ;   
                }
            ?>
        </div>
        <img src="" alt="">
    </div>
</body>
</html>