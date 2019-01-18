<?php
require 'common.php';
if(!isset($_SESSION['email']))
{
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
include 'header.php';
?>
<div class="container">
<div class="row">
<div class="col-xs-5 col-xs-offset-3">
<div class="table-responsive tab2">
<table class="table table-bordered">
<tr>
<th>ItemNumber</th>
<th>ItemName</th>
<th>Price</th>
</tr>
<tr>
<th></th>
<th></th>
<th></th>
</tr>
<tr>
<td></td>
<td>Total</td>
<td>Rs 0</td>
<td><a href="success.php"><button type="button" value="Confirm Order" class="btn btn-primary">Confirm Order</button></a></td>
</tr>
</table>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
</body>
</phpl>