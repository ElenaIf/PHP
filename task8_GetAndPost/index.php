<?php

$data = file_get_contents('data.json');
echo $data;
// this will show what request was made - get post or other
$request_method = $_SERVER['REQUEST_METHOD'];

// this will show what parameters are requested
$uri = $_SERVER['REQUEST_URI'];

echo "Printing the url request: <pre>" . $uri . "</pre>";


// how to access only recipes. we parse url to divide the path (recipes) from the second part of url (query), which comes after ? sign
$parts = parse_url($uri);

echo "Printing the divided into path and query url: <pre>";
print_r($parts);
echo "</pre>";

$exploded_parts = explode('/', $parts['path']);

echo "Printing divided into parts path: <pre>";
print_r($exploded_parts);
echo "</pre>";

// we parse string. we chose query because it is a string and it has parameters we need. We cannot write just parts, because it will be an array, not string. It will contain also path. We need only query
parse_str($parts['query'], $output);
Echo "Printing the parts of query: <pre>";
print_r($output);
echo "</pre>";


switch ($request_method) {
    case 'GET':
        get_recipes();
        break;
    case 'POST':
        add_new_recipe();
        break;
    case 'PUT':
        update_recipe();
        break;
    case 'DELETE';
        remove_recipe();
        break;
    default:
        echo json_encode(array('message' => 'ERROR!'));
        break;
};


function get_recipes(){
    if (!isset($GLOBALS['exploded_parts'][2])){
         // we cannot in PHP just access the global variable. We need $_GLOBALS function for that
     echo $GLOBALS["data"];
    } else {
echo json_encode($GLOBALS["data"][0]);
    }
   
    
}
?>