<form method="POST">
        <label for="pokemonName">Pokemon name</label>
        <input type="text" name="pokemonName" id="pokemonName" />
        <label for="pokemonType">Choose a type</label>
        <select name="pokemonType" id="pokemonType">
            <option value="normal">Normal</option>
            <option value="fire">Fire</option>
            <option value="poison">Poison</option>
            <option value="rock">Rock</option>
            <option value="water">Water</option>
        </select>
        <button type="submit">Submit</button>
    </form>
<?php
if (isset($error)) {
    echo $error;
}?>

<?php

$message = "";
$error = "";

$current_data = file_get_contents("data.json");

$decoded_data = json_decode($current_data, true);

$array_data = $decoded_data["results"];

$newArray = array(
    "name" => $_POST["pokemonName"],
    "type" => $_POST["pokemonType"],
);
$array_data[] = $newArray;
$final_data = json_encode($array_data);

file_put_contents("data.json", $final_data);

?>