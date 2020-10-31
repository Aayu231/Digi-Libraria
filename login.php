<?php
$conn = mysqli_connect("localhost", "root", "", "digi-libraria");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error()); }

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * from login WHERE email = '$email' and password= '$password'") 
or die("Failed to query database".mysqli_error($con));

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row['email'] == $email && $row['password'] == $password){

    header("Location: forum.html");
}else{
    header("Location: discussions.html?msg=Email or password is incorrect");
}
?>