<?php
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Grupo 2</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="./bootstrap.min.css">
    </head>
    <body>
        <div id="hangman-div2">
            <div id="lettersContainer">
             
                <div id="lives-left-div">
                    Intentos Restantes: <span id="lives-left"><?= $_SESSION['lives'] ?></span>
                </div>
            </div>
            
            <div>
                <img src="./images/hangman/0.jpg" 
                    width="200" height="350"
                    id="hangman" alt="hangman"/>
            </div>
          
            <div>
                <div id="guessed-word-div">
                    <?= $blankWord ?>
                </div>

            
                <div id="letters">
                    <?php
                    foreach (range('A', 'Z') as $char) {
                        echo '<span class="letter">' . $char . '</span>';
                    }
                    ?>
                    <div class="clear"></div>
                </div>
                <div id="the-word-was-div" class="display-none"></div>
                <div id="play-again-div" class="display-none">
                    <a href="index.php" class="btn btn-warning">Reintentar...</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/script.js"></script>    
    </body>
</html>



