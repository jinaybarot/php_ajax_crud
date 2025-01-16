<?php
$conn = mysqli_connect("localhost", "root", "", "php_jinay");

if(!$conn){
    die("connection failed" . mysqli_connect_error());
}
?>