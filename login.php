<?php
require 'common.php';
?>
<!DOCTYPE phpl>
<phpl>
<head>
<title>Login page</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" href="bootstrap/js/jquery-3.3.1.min.js">
<link rel="stylesheet" type="text/javascript" href="bootstrap/js/bootstrap.min.js">
<link rel="stylesheet" href="style2.css">
</head>
<body>
<?php
include 'header.php';
?>
<div class="container space">
<div class="row">
<div class="col-xs-6 col-xs-offset-3">
<div class="panel panel-warning">
<div class="panel-heading" style="padding-top:55px color:black"><h3>Login to make purchase</h3></div>
<div class="panel-body" style="margin-bottom:155px";>
<form method="post" action="login_script.php">
<div class="form-group">
<label for="email">Email</label><br>
<input type="email" placeholder="Enter email" name="email" required="true" value="email"><br><br>
<label for="password">Password</label><br>
<input type="password" placeholder="Enter password" name="password" required="true" value="password" pattern =".{6,}"><br><br>
<button type="submit" value="registration_submit" class="btn btn-warning" name="submit">Login</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
</body>
</phpl>

