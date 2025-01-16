<?php 
include "dbconfig.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['latsname'];
$email = $_POST['email'];
// $city = $_POST['city'];
// $gender = $_POST['gender'];
// $language = $_POST[''];

if($id != ''){
    $sql = "UPDATE user SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id='$id'";
} else{
    $sql = "INSERT INTO user (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
}

if (mysqli_query($conn, $sql)){
    header("location: index.php");
} else {
    echo "error in operation: " . mysqli_error($conn);
}
}
?>