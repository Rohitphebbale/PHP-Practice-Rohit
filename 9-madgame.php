<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Mad Game </title>
</head>
<body>
    <form action="9-madgame.php" method="get">
        color : <input type="text" name="color"> <br> <br>
        pluralnoun : <input type="text" name="pluralnoun"> <br> <br>
        celebrity : <input type="text" name="celebrity"> <br><br>
        <input type="submit"> <br><br>
    </form>


    <?php
        $color = $_GET["color"];
        $pluralnoun = $_GET["pluralnoun"];
        $celebrity = $_GET["celebrity"];

        echo "Rose are $color <br>";
        echo "$pluralnoun are blue <br>";
        echo "I Love $celebrity <br>";

        ?>

</body>
</html>