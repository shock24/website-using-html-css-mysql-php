<?php
require 'common.php';
?>
<!DOCTYPE phpl>
<phpl>
<head>
<title>Sign-up page</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" href="bootstrap/js/jquery-3.3.1.min.js">
<link rel="stylesheet" type="text/javascript" href="bootstrap/js/bootstrap.min.js">
<link rel="stylesheet" href="style2.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include 'header.php';
?>
<div class="container pad2">
<div class="row">
<div class="col-xs-4 col-xs-offset-4" style="margin-bottom:55px";>
<form method="post" action="signup_script.php">
<h1>SIGN UP</h1><br>
<input type="text" name="name" class="form-control" placeholder="Name" required><br>
<input type="email" name="email" class="form-control" placeholder="Email" required><br>
<input type="password" name="password" class="form-control" placeholder="Password" required><br>
<input type="number" name="contact" class="form-control" placeholder="Contact" required><br>
<input type="text" name="city" class="form-control" placeholder="City" required><br>
<input type="address" name="address" class="form-control" placeholder="Address" required><br>
<button type="submit" value="registration_submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
</body>
</phpl>