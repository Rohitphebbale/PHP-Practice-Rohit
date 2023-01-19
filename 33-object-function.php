<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Object Functions</title>
</head>
<body>
    <?php
    class student {
        var $name;
        var $major;
        var $gpa;

        function __construct($name,$major,$gpa){
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

         function honor(){
            if($this->gpa >= 3.6){
                    return "true";
            }
            return "false";
         }
    }

  $student1 = new student("Rohit","business",2.5);
   $student2 = new student("Raju","Artist",4.8);

echo $student1->honor();

    ?>
</body>
</html>