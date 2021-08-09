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

$current_data = file_get_contents("newAddedPokemons.json");
$formatted_data = json_decode($current_data, true);
$results = $formatted_data['results'];

if (empty($_POST['pokemonName'])) {
    echo "Please write pokemon's name";
} else {
    for ($j = 0; $j < count($results); $j++) {
        if ($results[$j]['name'] === $_POST["pokemonName"]) {
            echo "Such pokemon already exists";
            return;
        }
        ;
    }
    ;

    $formatted_results = array();

    for ($i = 0; $i < count($results); $i++) {
        $formatted_results[$i]['name'] = strtoupper($results[$i]['name']);
        $formatted_results[$i]['url'] = $results[$i]['url'];
    }

    $new_pokemons_array = array(
        "name" => strtoupper($_POST["pokemonName"]),
        "type" => $_POST["pokemonType"],
        "url" => "something",
    );

    array_push($formatted_results, $new_pokemons_array);

    $formatted_data['results'] = $formatted_results;
    $json_formatted_data = json_encode($formatted_data);

    

    $write_down_new_pokemon = file_put_contents("newAddedPokemons.json", $json_formatted_data);

    echo "Your pokemon was successfully saved";
    echo "<br>";
    echo "<br>";
    echo (file_get_contents("newAddedPokemons.json"));

}

?>