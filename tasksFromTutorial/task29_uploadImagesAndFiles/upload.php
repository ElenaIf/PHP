<?php
// first we need to check if submit button was pressed
if (isset($_POST['submit'])) {
// this superglobal gets all the info about the file
    $file = $_FILES['file'];
    // we get the name
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    // we get the file extension
    $fileExt = explode('.', $fileName);
    // we make it lower case
    $fileActualExt = strtolower(end($fileExt));
// what extensions are allowed
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");
            } else {
                echo "your file is too big";
            }

        } else {
            echo "there was an error uploading file";
        }
    } else {
        echo "you cannot upload files of this type";
    }
    ;

}
;
