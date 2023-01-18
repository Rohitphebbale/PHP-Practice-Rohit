<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Switch</title>
</head>
<body>
    <form action="26-switch.php" method="post">
        What is Your Grade..? <br> <br>
        <input type="text" name="name"> <br><br>
        <input type="submit"> <br> <br>

    </form>

    <?php
    $grade = $_POST["name"];
    switch($grade){
        case "A" :  echo "you did amazing";
                    break;
          case "B" :  echo "you did pretty";
                    break;
          case "C" :  echo "you did poorly";
                    break;
          case "D" :  echo "you did not bad";
                    break;
          case "E" :  echo "you did bad";
                    break;
         case "F" :  echo "you Fail";
                    break;
         default : echo "Invalid";
    }

    ?>
</body>
</html>