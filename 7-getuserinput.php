<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="7-getuserinput.php" method="get">
        Name : <input type="text" name="username"> <br> <br>
        age : <input type="number" name="userage"> <br> <br>
              <input type="submit">
    </form>
    <br>


   your Name is <?php echo $_GET["username"] ?>
            <br>
   your age is <?php echo $_GET["userage"] ?>


</body>
</html>