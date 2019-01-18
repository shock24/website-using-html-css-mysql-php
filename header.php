<!DOCTYPE phpl>
<phpl>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" href="bootstrap/js/jquery-3.3.1.min.js">
<link rel="stylesheet" type="text/javascript" href="bootstrap/js/bootstrap.min.js">
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#" class="navbar-brand">Lifestyle Store</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">

<?php if(isset($_SESSION['email'])) { ?>
<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
<li><a href="setting.php"><span class="glyphicon glyphicon-user">Settings</span></a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-log-in">Logout</span></a></li>
<?php } else{ ?>
<li><a href="signup.php"><span class="glyphicon glyphicon-user">signup</span></a></li>
<li><a href="login.php"><span class="glyphicon glyphicon-log-in">login</span></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>
</body>
</phpl>