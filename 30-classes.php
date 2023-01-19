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
    }

    $book1 = new book();
    $book1 ->title = "Kranti";
    $book1 ->author = "Darshan";
    $book1 ->pages = 400;

    $book2 = new book();
    $book2 ->title = "Vikrant Rona";
    $book2 ->author = "Sudeep";
    $book2 ->pages = 700;

    echo $book1->title;
    echo $book2->title;

    ?>
</body>
</html>