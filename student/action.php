<?php
include 'database.php';

$username=$_POST['username'];
$school=$_POST['school'];
$standard=$_POST['standard'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$message=$_POST['message'];

$sql="INSERT INTO users(Username, School, Standard, Email, Contact, Address, Message) VALUES ('$username','$school','$standard','$email','$contact','$address','$message')";

$result=mysqli_query($conn, $sql);

if($result){
    header('Location: ../redirect.html');
}

?>
 