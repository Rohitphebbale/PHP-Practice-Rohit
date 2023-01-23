<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
    <input type="number" placeholder="number-01" name="num1"> <br><br>
    <select name="oper">
        choose operation : 
        <option name="add">Add (+)</option>
        <option name="sub">substract (-)</option>
        <option name="multi">multifly (*)</option>
        <option name="divide">divided (/)</option>
    </select> <br><br>
    <input type="number" placeholder="number-02" name="num2"><br><br>
    <button name="submit">calculate</button>
</form>    

<?php
if (isset ($_GET["submit"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $opp = $_GET["oper"];
    $add = $_GET["add"];
    $sub = $_GET["sub"];
    $multi = $_GET["multi"];
    $divide = $_GET["divide"];
    $result;


    if ($opp == null && strlen($opp) == 0){
        echo "Enter the operation..";
    }
    elseif($opp == $add){
        $result = $num1 + $num2;
        echo $result;
    }
    elseif($opp == $sub){
        $result = $num1 - $num2;
        echo $result;
    }
    elseif($opp == $multi){
        $result = $num1 * $num2;
        echo $result;
    }
    
}


?>
</body>
</html>