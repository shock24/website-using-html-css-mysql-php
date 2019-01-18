<?php
require 'common.php';
//include 'header.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
md5($password);
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$user_registration_query= "INSERT INTO users(name, email, password, contact, city, address) values ('$name','$email','$password','$contact','$city','$address')";
$user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
if(isset($_SESSION['email'])) { 
header('location:products.php');
}
$_SESSION['email']= $email;
$_SESSION['password']=$password;
$_SESSION['id']= mysqli_insert_id($con);
//include 'footer.php';
?>