<!DOCTYPE html>
<html lang="en">
<head>
    

    <title>inside Function if else Condition</title>
</head>
<body>
    <?php
    function getmax($num1, $num2, $num3){
        if($num1>=$num2 && $num1>=$num3){
            return $num1;
        }
        elseif($num2>=$num1 && $num2>=$num3){
            return $num2;
        }
        else{
            return $num3;
        }
    }

    echo getmax(122, 3432, 242);

    ?>
</body>
</html>