<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Simple calculation from user</title>
</head>
<body>
    
<form action="8-getusercalculate.php" method="get">
    <input type="number" name="num1"> <br> <br>
    <input type="number" name="num2"> <br> <br>
    <input type="submit"> <br>
</form>
<br>

Answer : <?php echo $_GET["num1"] + $_GET["num2"] ?>

</body>
</html>