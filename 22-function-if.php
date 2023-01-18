<!DOCTYPE html>
<html lang="en">
<head>
    

    <title>Inside Function if condition</title>
</head>
<body>
    
<?php
    function getmax($num1,$num2){
        if($num1 > $num2){
            return $num1;
        }
        else{
            return $num2;
        }
    }
    echo getmax(100,34);

    ?>
</body>
</html>