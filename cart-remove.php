<?php
require 'common.php';
if(isset($_GET['id'])&& is_numeric($_GET['id'])) {
$item_id=$_GET['id'];
$user_query="DELETE FROM user_items WHERE item_id='$item_id'";
$result=mysqli_query($con, $user_query ) or die(mysqli_error($con));
header('location: cart.php');
}
?> 