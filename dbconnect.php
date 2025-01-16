<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,  $username, $password);

 if(!$conn){
    die("connection failed" . mysqli_connect_error());
 }

 $sql = "CREATE DATABASE php_jinay";

 if(mysqli_query($conn, $sql)){
    echo "database created succesfully";
 }else {
    echo "connection failed" . mysqli_error($conn);
 }

 mysqli_close($conn);
?>