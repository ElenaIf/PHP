<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Pokemons</h1>

<form action="index.php" method="get">
<label for="user_group">All pokemons are divided into groups of 50.
Write here which group you would like to display</label>
<input type="number" name="group" id="user_group">
<input type="submit" value="Submit">
</form>

    <?php

$pokemons_original = file_get_contents('data.json');
$pokemons_json = json_decode($pokemons_original, true);
$pokemons_array = $pokemons_json['results'];

$pokemons_array_limited = array_chunk($pokemons_array, 50);
echo "<p>The total number of availiable pokemons is " . count($pokemons_array) . "</p>";

if ($_GET != null && $_GET['group'] != null) {
    $counter = 0;
    $pokemons_group = $_GET['group'];

    echo "<p>Here is 50 pokemons from the group number " . $pokemons_group . "</p>";

    while ($counter < count($pokemons_array_limited[$pokemons_group])) {
        echo $counter + 1 . " ";
        print_r($pokemons_array_limited[$pokemons_group][$counter]['name']);
        echo " - <a href=\"";
        print_r($pokemons_array_limited[$pokemons_group][$counter]['url']);
        echo "\">url here</a>";
        echo "<br>";
        $counter++;
    }
    ;
} else {

    echo "<p>Here is the list of all availiable pokemons: </p>";

    $counter = 0;

    while ($counter < count($pokemons_array)) {
        echo $counter + 1 . " ";
        print_r($pokemons_array[$counter]['name']);
        echo " - <a href=\"";
        print_r($pokemons_array[$counter]['url']);
        echo "\">url here</a>";
        echo "<br>";
        $counter++;
    }
    ;

}
;
?>

</body>
</html>