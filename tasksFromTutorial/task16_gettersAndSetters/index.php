<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// getters and setters can controll the access to our classes
class Movie
{
    //visibility modifiers - are the keywords that tells PHP what code is able to access and use different attributes in our programs
    // public means that this attribute is visible to any other code in our PHP program. Everybody can access it, everybody can modify it
    public $title;
// private means that any code outside this class will not be able to access this attribute directly. We cannot now just set any rating we want now
    private $rating;

    // before we used var - it is the same as public. Nowadays usually public is used

    public function __construct($title, $rating)
    {
        $this->title = $title;
        $this->setRating($rating);
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "G") {
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
    }

}

$avengers = new Movie("Avengers", "Something");

//invalid rating, does not pass the check
//  $avengers -> setRating("Something");
echo $avengers->getRating();

?>

</body>
</html>