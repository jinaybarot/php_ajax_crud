<?php
include "dbconfig.php";

$id = $firstname = $lastname = $email = $city = $gender = $language = "";

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM user WHERE id = $id";
    // echo '<pre>';
    // print_r();
    // die;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $firstname = $row['firstname'];
        // echo '<pre>';
        // print_r($firstname);
        // die;
        $lastname = $row['lastname'];
        // echo '<pre>';
        // print_r($lastname);
        // die;
        $email = $row['email'];
        // echo '<pre>';
        // print_r($email);
        // die;
        $city = $row['City'];
        // echo '<pre>';
        // print_r($city);
        // die;
        $gender = $row['gender'];
        // echo '<pre>';
        // print_r($gender);
        // die;
        $language = $row['Language'];
        // echo '<pre>';
        // print_r($language);
        // die;
    }
}