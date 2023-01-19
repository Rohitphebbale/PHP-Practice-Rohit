<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Classes</title>
</head>
<body>
    <?php
    class book {
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $sPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    $book1 = new book("Kranti","Rohit",400);
   

    $book2 = new book("Vikrant","Raju",700);
   //update or madify
   $boo2 ->title = "love moktail";
   

    echo $book1->title;
    echo $book2->title;

    ?>
</body>
</html>