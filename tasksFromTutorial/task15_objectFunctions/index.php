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

class Student
{
    public $name;
    public $major;
    public $gpa;

    public function __construct($name, $major, $gpa)
    {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    public function hasHonors()
    {
        if ($this->gpa >= 3.5) {
            return "yes";
        } else {
            return "no";
        }

    }

}

$student1 = new Student("Tom", "IT", 2.5);
$student2 = new Student("Petrovich", "Business", 5.4);

echo $student2->hasHonors();

?>
</body>
</html>