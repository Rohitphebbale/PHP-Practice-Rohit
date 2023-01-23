<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<form action="switches.php" method="post">
    <input type="number" placeholder="number-01" name="num1"> <br><br>
    <select name="oper">
        choose operation : 
        <option value="add">Add (+)</option>
        <option value="sub">substract (-)</option>
        <option value="multi">multifly (*)</option>
        <option value="divide">divided (/)</option>
    </select> <br><br>
    <input type="number" placeholder="number-02" name="num2"><br><br>
    <button name="submit">calculate</button>
</form> 

<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
if(isset($_POST["oper"])){
    $opp = $_POST["oper"];
    // $num1 = $_POST["num1"];
    // $num2 = $_POST["num2"];
    switch($opp){
        case "add" : echo $num1 + $num2; break;
        case "sub" : echo $num1 - $num2; break;
        case "multi" : echo $num1 * $num2; break;
        case "divide" : echo $num1 / $num2; break;
        default : echo "enter valid number"; break;
       
    }
 
}
  

   
?>
</body>
</html>