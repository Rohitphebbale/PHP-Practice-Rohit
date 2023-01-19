<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>inheritance</title>
</head>
<body>
    

<?php

class chef{
    function makechicken(){
        echo "the chef make chicken <br>";
    }

    function makemutton(){
        echo "the chef make motton <br>";
    }

    function makefish(){
        echo "the chef make fish <br>";
    }
}

class italianchef extends chef(){
function makepasta(){
    echo "the chef make pasta";
}
}

$chef - new chef();
$chef->makechicken();

$italianchef = new italianchef();
$italianchef->makepasta();

?>
</body>
</html>