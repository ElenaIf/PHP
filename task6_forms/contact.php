<?php

header("Access-Control-Allow-Origin: *");

echo '<p>Message:</p>';
echo '<pre>';
print_r($_POST);
echo '</pre>';

$send_status = mail("elena@ivankina.fi", "Subject for a test message", $_POST["message"]);

if ($send_status) {
    echo "message ok";
} else {
    echo "message not ok";
}
?>