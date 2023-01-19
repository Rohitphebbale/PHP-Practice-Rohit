<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Getter and Setter Method in if condition</title>
</head>
<body>
    <?php

    class movie{
        public $title;
        public $rating;

        function __construct($title,$rating){
            $this->title = $title;
            $this->rating = $rating;    //or $this->setrating($rating);
        }

        function getrating(){
            return $this->rating; 
        }
 
        function setrating($rating){
            if($rating=="G" || $rating=="PG" || $rating=="PG-13" || $rating=="R"){
                $this->rating = $rating;
            }
            else{
                $this->rating = "NR";
            }
        }
    }

$avengers = new movie("avengers","pg-13");

$avengers->setrating("hp");
echo $avengers->getrating();


    ?>
</body>
</html>