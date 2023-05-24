<?php 
$host="localhost";
$email="root";
$password="";
$db="cap";

$conn=mysqli_connect($host,$email,$password,$db);
if($conn===false){
    die("connection error");
}

?>