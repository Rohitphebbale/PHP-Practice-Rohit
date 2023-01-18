<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Arrays input from Users</title>
</head>
<body>
    <form action="15-arrayinput.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
      $grade = array("rohit"=>"A+", "Raju"=>"B+", "lambya"=>"C+");
      echo $grade[$_POST["student"]];
      ?>
</body>
</html>