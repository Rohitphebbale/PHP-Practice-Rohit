<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Functions</title>
</head>
<body>
    
<?php

  function sayhi(){
    echo "Hello User";
  }
    sayhi();

// ============================================

function sayhello($name){
    echo "Hello $name";
}
sayhello("Rohit");

//==================================================

function hello($name){
    echo "Hii $name <br>";
}
hello("Rohit");
hello("Raju");
hello("Ravit");

//=======================================================

function helloo($name,$age){
    echo "Hii $name, you are $age <br>";
}
helloo("Rohit",23);
helloo("Raju",24);
helloo("Ravit",34);
  ?>
</body>
</html>