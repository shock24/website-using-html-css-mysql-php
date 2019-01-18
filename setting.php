<?php
require 'common.php';
if(!isset($_SESSION['id'])) {
	header('location: index.php');
}
?>
<!DOCTYPE phpl>
<phpl>
<head>
<title>Products page</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" href="bootstrap/js/jquery-3.3.1.min.js">
<link rel="stylesheet" type="text/javascript" href="bootstrap/js/bootstrap.min.js">
<link rel="stylesheet" href="style2.css">
</head>
<body>
<?php
require 'header.php'
?>
<div class="container pad2">
<div class="row">
<div class="col-xs-6 col-xs-offset-3">
<form method="POST" action="settings_script.php">
<div class="form-group">
<h3>Change Password</h3><br>
<input type="text" name="Old password" placeholder="Old Password" class="form-control"><br>
<input type="text" name="New password" placeholder="New Password" class="form-control"><br>
<input type="text" name="New password" placeholder="Re-type New Password" class="form-control"><br>
<button type="button" value="Change" class="btn btn-primary">Change</button>
</div>
</form>
</div>
</div>
</div>
</body>
</phpl>