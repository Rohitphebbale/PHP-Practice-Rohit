<?php
if(isset($_POST["btn"])){
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    

    if($name == "sweet home" && $pass == "sangamesh"){
        header("Location: second.php");
        exit();
    }
    else{
        echo "Enter valid Name and password";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>First Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>



     <form action="" method="post">
        <div class="mainbox">
                <div class="box1">

                    <img class="home" src="home.jpg" alt="home/jpg">

                </div>

                <div class="box2">
                        <h3 id="register">Register Form</h3>
                    <input id="name" type="text" placeholder="Enter Sweet home" name="name">
                    <input id="name" type="password" placeholder="Enter Sangamesh" name="pass">
                    <button id="btn" name="btn">Register</button>
            
                   
                </div>
            </div>
    
     </form>
</body>
</html>


