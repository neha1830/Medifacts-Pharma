<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="medifacts";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$first_name = mysqli_real_escape_string($conn, $_POST['c_fname']);
$last_name = mysqli_real_escape_string($conn, $_POST['c_lname']);
$email = mysqli_real_escape_string($conn, $_POST['c_email']);
$subject = mysqli_real_escape_string($conn, $_POST['c_subject']);
$message = mysqli_real_escape_string($conn, $_POST['c_message']);

$sql = "INSERT INTO contact (c_fname, c_lname, C_email,c_subject,c_message) VALUES ('$first_name', '$last_name', '$email','$subject','$message')";
if(mysqli_query($conn, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// ?>