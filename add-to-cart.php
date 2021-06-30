<?php 
include "config.php";
session_start();

if(empty($_SESSION['cart'])){
	$_SESSION['cart']=array();
}
array_push($_SESSION['cart'], $_GET['id']);
 

?>
<!DOCTYPE html>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'tittle.php';?>
	<title></title>
</head>
<body>
	<h1><?php include 'top-heading.php';?></h1>

</body>
</html>
<p>
	Product was successfully added to your cart
	<a href="shopping-cart.php?id=1">Shopping cart</a>
</p>