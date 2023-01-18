<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Get and Post difference</title>
</head>
<body>
    <form action="10-URLparameter.php" method="post">
        Name : <input type="password" name="name"> <br>
        <input type="submit">
    </form>

    <?php echo $_POST["name"] ?>
</body>
</html>