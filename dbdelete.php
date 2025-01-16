<?php
include "dbconfig.php";

$id = $_GET['delete'];
// echo '<pre>';
// print_r($id);
// die;

$sql = "DELETE FROM user WHERE id = '$id' ";
// echo '<pre>';
// print_r($sql);
// die;

if(mysqli_query($conn, $sql)){
    header("Location: index.php");
}else {
    echo "Error: " . mysqli_error($conn);
}
?>