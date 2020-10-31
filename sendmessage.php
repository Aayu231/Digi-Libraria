<?php
$conn = mysqli_connect("localhost", "root", "", "digi-libraria");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error()); }

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


$sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
$result = mysqli_query($conn, $sql);
if($result) {
	
	header("Location: contact.html?msg=Message sent successfully");
	
} else {
	
	header("Location: contact.html?msg=Sorry, Something went wrong. Please try again later");}
?>