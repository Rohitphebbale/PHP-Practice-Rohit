<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Return Statement</title>
</head>
<body>
    
<?php


function cube($num){
    return $num + $num +$num;
}

$result=cube(4);
echo $result;

//or echo cube(4);

?>
</body>
</html>