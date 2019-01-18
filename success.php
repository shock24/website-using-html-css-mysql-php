<?php
require 'common.php';
if(!isset($_SESSION['email'])) {
	header('location: index.php')
}

<!DOCTYPE phpl>
<phpl>
<head>
<title>Success</title>
</head>
<body>
<b><p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item</p></b>
</body>
</phpl>