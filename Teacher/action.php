<?php
include 'database.php';

$teachername=$_POST['teachername'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$qualification=$_POST['qualification'];
$experience=$_POST['experience'];
 

$sql="INSERT INTO teacher(Teachername, Email, Contact, Address, Pincode, Qualification, Experience) VALUES ('$teachername','$email','$contact','$address','$pincode','$qualification','$experience')";

$result=mysqli_query($conn, $sql);

if($result){
    header('Location: ../redirect.html');
}

?>