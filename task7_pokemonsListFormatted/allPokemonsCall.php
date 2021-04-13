
<?php

include "variables.php";

    $data = file_get_contents('data.json');

    $formatted_data = json_decode($data, true);
    $results = $formatted_data['results'];
    $formatted_results = array();

    $json_formatted_results = json_encode($formatted_results);

    echo (count($results)/$chunk_size);

?>