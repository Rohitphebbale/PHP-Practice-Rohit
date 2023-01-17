<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>About Strings Basic</title>
</head>
<body>
    <?php
$name = "Rohit Hebbale";
echo $name;         //Rohit Hebbale
echo $name[0];         //R
echo $name[2];          //h
echo "Shaheed"[2];      //a
echo "Shaheed"[4];        //e
echo strtolower($name); //rohit hebbale
echo strtoupper($name); //ROHIT HEBBALE
echo strlen($name);     //13
echo strtolower("Dog"); //dog


                      // modify String
$name = "Rohit Hebbale";
$name[1] = a;
echo $name;         // Rahit Hebbale

        
$job = "Antropic Company";
echo str_replace("Antropic" , "sdjkgf",$job);
echo str_replace("Antropic", "Ayas Sir",$job);        //Ayas sir Company
echo str_replace("pic", "Ayas Sir",$job);             // AntroAyas sir Company
    
    
    // sunstr
    $name = "Rohit Hebbale";
    echo substr($name,6);           //Hebbale
    echo substr($name, 6,3);        // Heb 
    
    
    ?>

</body>
</html>