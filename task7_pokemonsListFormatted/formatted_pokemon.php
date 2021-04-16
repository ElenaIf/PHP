<?php

include "variables.php";

$data = file_get_contents('data.json');

// We have to convers json into an array because php cannot work with json
$formatted_data = json_decode($data, true);
// We access the data that we need
$results = $formatted_data['results'];
// We make an empty array
$formatted_results = array();

// we start putting data into array. Name is converted into upperstring. We have an exact copy of the result array inside the formatted_results array
for ($i = 0; $i < count($results); $i++) {
    $formatted_results[$i]['name'] = strtoupper($results[$i]['name']);
    $formatted_results[$i]['url'] = $results[$i]['url'];
}

$formatted_results_50 = (array_chunk($formatted_results, $chunk_size));



$json_formatted_results = json_encode($formatted_results_50[$_GET['page']]);

 echo $json_formatted_results;

//  To write formatted results into the file
$write_file_result = file_put_contents('formatted_data.json', $json_formatted_results);

?>