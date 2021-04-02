<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and objects</title>
</head>
<body>

<h1>Classes and Objects</h1>

<?php

class Book { // this is class

    var $title; // these are attributes
    var $author;
    var $pages;

    // here we will create a constructor

    function __construct($aTitle, $aAuthor, $aPages){
echo "<p>New book created</p>";
// "this" - is a keyword and it refers to the current object, which is getting created now
$this ->title = $aTitle; // we say that the title of this object equals to the aTitle, that is passed into this function as a parameter
$this->author = $aAuthor;
$this->pages = $aPages;
    }

};

$book3 = new Book("Anna Karenina", "Tolstoy", 500);

echo $book3->title;

?>

</body>
</html>