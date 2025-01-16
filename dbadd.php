<?php 
include "dbconfig.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$id = $_POST['id'];
if (empty($_POST["firstname"])) {
    // $nameErr = "Name is required";
    echo '<script type="text/javascript">alert("Name is required");</script>';
  } else {
    $firstname = test_input($_POST["firstname"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
    //   $nameErr = "Only letters and white space allowed";
    echo '<script type="text/javascript">alert("Only letters and white space allowed");</script>';
    }
  }
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$language = implode(", ", $_POST['language']);



if($id != ''){
    $sql = "UPDATE user SET firstname='$firstname', lastname='$lastname', email='$email', gender='$gender', Language='$language' WHERE id='$id'";
} else{
    $sql = "INSERT INTO user (firstname, lastname, email, city, gender, Language) VALUES ('$firstname', '$lastname', '$email', '$city', '$gender', '$language')";
    // echo '<pre>';
    // print_r($sql);
    // die;
}

if (mysqli_query($conn, $sql)){
    header("location: index.php");
} else {
    echo "error in operation: " . mysqli_error($conn);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
}
?>