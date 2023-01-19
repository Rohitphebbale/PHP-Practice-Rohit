<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Getter and Setter Method</title>
</head>
<body>
    <?php

    class movie{
        public $title;
        public $rating;

        function __construct($title,$rating){
            $this->title = $title;
            $this->rating = $rating;
        }

        function getrating(){
            return $this->rating; 
        }

        function setrating($rating){
            $this->rating = $rating;
        }
    }

$avengers = new movie("avengers","pg-13");

$avengers->setrating("hp");
echo $avengers->getrating();


    ?>
</body>
</html>