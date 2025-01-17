<?php
include "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $gender = $_POST["gender"];
    $language = implode(", ", $_POST['language']);


    if ($id != '') {
        $sql = "UPDATE user SET firstname='$firstname', lastname='$lastname', email='$email', gender='$gender', Language='$language' WHERE id='$id'";
    } else {
        $sql = "INSERT INTO user (firstname, lastname, email, city, gender, Language) VALUES ('$firstname', '$lastname', '$email', '$city', '$gender', '$language')";
        // echo '<pre>';
        // print_r($sql);
        // die;
    }

    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
    } else {
        echo "error in operation: " . mysqli_error($conn);
    }

}
?>