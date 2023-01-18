<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Check-Box</title>
</head>
<body>
    <form action="13-checkbox.php" method="post">
        Apples : <input type="checkbox" value="apple" name="fruits[]"> <br>
        Orange : <input type="checkbox" value="orange" name="fruits[]"><br>
        Pears : <input type="checkbox" value="pears" name="fruits[]"><br>
                <input type="submit">  <br>  
    </form>

    <?php 
            $fruits = $_POST["fruits"];
            echo $fruits[0];                //index value will be printed after clicking radio button
    ?>
</body>
</html>