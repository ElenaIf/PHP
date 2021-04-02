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

};

//object is an instance of a class
//the object is an actual book
//This is a long way to create an objext, without using a constructor(in the next lesson is the constructor)
$book1 = new Book;
$book1->title = "Harry Potter";
$book1->author = "Rowling";
$book1->pages = 400;

echo $book1->title;

echo "<br>";

$book2 = new Book;
$book2->title = "Lord of the rings";
$book2->author = "Tolien";
$book2->pages = 700;

echo $book2->title;




?>

</body>
</html>