<?php
$user_id = $_POST["id"];
$password = $_POST["passw"];
$name = $_POST["name"];
$address = $_POST["address"];
$country = $_POST["country"];
$zip = $_POST["zip"];
$email = $_POST["email"];
$sex = $_POST["sex"];
$language = $_POST["lang"];
$about = $_POST["about"];
$image = $_FILES["fileToUpload"]["name"];  
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);




echo '$user_id ' . $user_id;
echo '<br />';
echo '$password ' . $password;
echo '<br />';
echo '$name ' . $name;
echo '<br />';
echo '$address ' . $address;
echo '<br />';
echo '$country ' . $country;
echo '<br />';
echo '$zip ' . $zip;
echo '<br />';
echo '$email ' . $email;
echo '<br />';
echo '$sex ' . $sex;
echo '<br />';
echo '$language ' . $language;
echo '<br />';
echo '$about ' . $about;
echo '<br />';

?>

<img src="/PHP/forms/complete_form//uploads/tree-roots.png" alt="roots">