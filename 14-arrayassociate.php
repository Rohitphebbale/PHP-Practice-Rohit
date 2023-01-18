<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Associate Array</title>
</head>
<body>
    <?php
     $grade = array("rohit"=>"A+", "Raju"=>"B+", "lambya"=>"C+");
     echo $grade["Raju"];               //B+


                //modify
                $grade["Raju"] = "F";
                echo $grade["Raju"];        //F
                echo count($grade);         //3
     ?> 
</body>
</html>