<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>if Statement</title>
</head>
<body>
    
<?php
    $ismale = true;
    $istall = false;
    
    if($ismale && $istall){
        echo "You are Male and tall";
    }
    elseif($ismale && !$istall){
        echo "You are a short Male";
    }
    elseif(!$ismale && $istall){
        echo "You are not male but tall";
    }
    else{
        echo "You are not Male and not tall";
    }
    ?>
</body>
</html>