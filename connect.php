<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db ='digi-libraria';

$connection = mysqli_connect($host,$user,$password,$db);
if($connection){
   echo "Success";
     // do all your stuff that you want
}else{
   echo "db connection error because of".mysqli_connect_error();
}
?>