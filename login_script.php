<?php
require 'common.php';
if(empty($_POST['email']))
{
	echo "E-mail is required";
}
else{
	$email=mysqli_real_escape_string($con, $_POST['email']);
}
if(empty($_POST['password']))
{
	echo "Password is required";
}
else{
	$password=mysqli_real_escape_string($con, $_POST['password']);
}
$user_registration_query= "SELECT * FROM users where email='$email' AND password='$password'";
$select_query_result= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $result= mysqli_fetch_array($select_query_result);
    if(($result['email']==$email)&& ($result['password']==$password)) {
		header('location: products.php');
	}
	else
	{
		echo "Details entered by the user are incorrect";
	}
	$_SESSION['email']=$email;
	$_SESSION['id']=mysqli_insert_id($con);

?>