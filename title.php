<?php
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ahorcados UTH EN VIVO</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <div id="GameContainer">
        <form action="AhorcadosGameService.php" method="POST">
            <input type="hidden" name="action" value="1" />
            <div class="center">
                <div id="levels-div">
                    <span id="level">
                        <input type="radio" name="level" checked="checked" id="level_0" value="0">
                        <label for="level_1">Nivel Medio: Tienes 5 intentos.</label><br>
                        <input type="radio" name="level" id="level_2" value="2">
                        <label for="level_2">Nivel Dificil: Tienes 3 intentos.</label>
                    </span>
                </div>
                <div>
                    <input type="submit" 
                            class="btn btn-success"
                            value="Comenzar" id="submit-button" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>