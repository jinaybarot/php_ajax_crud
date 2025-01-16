<?php
include "dbconfig.php";

$sql = "CREATE TABLE user(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(60),
City VARCHAR(20) NOT NULL,
gender VARCHAR(20) NOT NULL,
Language VARCHAR(20) NOT NULL
)";

if(mysqli_query($conn, $sql)){
    echo "database created succesfully";
 }else {
    echo "connection failed" . mysqli_error($conn);
 }

 mysqli_close($conn);
?>