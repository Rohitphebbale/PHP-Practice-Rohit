<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>include</title>
</head>
<body>
    <?php 
    $tittle = "My First Post";
    $author = "Rohit";
    $wordcount = 400;
    include "artical.php"
    
    ?>

    <?php
    include "use.php";
    sayhi("Rohit")
    ?>
</body>
</html>

<!-- after goto artical.php then rightclick - print then you go to code -->