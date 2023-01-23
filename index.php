<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    
<h1>Simple Login form</h1>
<form action="index.php" method="post">
UserName : <input type="text" placeholder="Enter the Name" name="username"> <br> <br>
Password : <input type="password" placeholder="Enter the Password" name="password"> <br> <br>
<input type="submit" name="submit">
</form>

<?php
if(isset ($_POST["submit"])){
    $un = $_POST["username"];
    $pass = $_POST["password"];

    if($un == "admin" && $pass == "admin"){
       header('Location: sam.php');
       exit();
        
    }
    else{
        echo "invalid username & password";
    }
}
?>
</body>
</html>