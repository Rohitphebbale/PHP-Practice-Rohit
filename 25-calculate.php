
<!-- it take double or float value also -->
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Calculate</title>
</head>
<body>
    <form action="24-calculate.php" method="post">
        first number : <input type="number" name="num1" step="0.001"> <br> <br>
        Sign : <input type="text" name="op"> <br><br>
        second number : <input type="number" name="num2"> <br><br>
        <input type="submit"> <br> <br>
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

if($op == "+"){
    echo $num1 + $num2;
}
elseif($op == "-"){
    echo $num1 - $num2;
}
elseif($op == "*"){
    echo $num1 * $num2;
}
elseif($op == "/"){
    echo $num1 / $num2;
}
else{
    echo "Invalid OPerater Sign";
}

    ?>
</body>
</html>