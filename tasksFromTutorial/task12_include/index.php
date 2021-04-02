<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <!-- how to include the parts of code into a file -->


<?php
include "header.html";
?>

<main>
<p>Hello from main!</p>
<?php

$title = "My blogpost" ;
$author = "Lena";
$word_count = 400;

include "article.php";

// in that external file I can have anything I want. There can be some functions, some variables and whatever I need. Then I can include it and use what I need from there - variables, functions etc.
?>
<?php

$title = "My blogpost 2" ;
$author = "Anna";
$word_count = 200;

include "article.php";
?>
</main>

<?php
include "footer.html";
?>

</body>
</html>