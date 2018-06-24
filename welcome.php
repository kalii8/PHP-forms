<?php 
// echo "Welcome ". $_REQUEST["fname"] . "<br>";
// echo "You are ".$_REQUEST["age"]. " years old! <br>";
// echo $_FILES["fileToUpload"]["name"];
// move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "C:/web/codingbootcamp/exercises/PHP/forms/".$_FILES["fileToUpload"]["name"]);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (isset($_POST["submit"])) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Upload successful";
    } else {
        echo "Error in file upload";
    }
}

?>

<!-- <img src="/PHP/forms/photoshop-2845779_1280.jpg" alt="roots"> -->