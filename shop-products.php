<?php 
 include "config.php";?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'tittle.php';?>
	<title></title>
</head>
<body>
	<h1><?php include 'top-heading.php';?></h1>
	<div class="product">
		<h3>iPhoneX</h3>
		<h4>Price:100000</h4>
		<a href="add-to-cart.php?id=iPhoneX">Add to cart</a>
		
		

	</div>
	<div class="product">
		<h3>Pocophone X3</h3>
		<h4>Price:32000</h4>
		<a href="add-to-cart.php?id=Pocophone X3">Add to cart</a>
	</div>
	<div class="product">
		<h3>OppoF1</h3>
		<a href="add-to-cart.php?id=OppoF1">Add to cart</a>
		<h4>Price:9000</h4>
	</div>
	<div class="product">
		<h3>Samsung Note X</h3>
		<h4>Price:110000</h4>
		<a href="add-to-cart.php?id=SAMSUNG Note X">Add to cart</a>
	</div>
	<div class="product">
		<h3>REALME X7 MAX 5G.</h3>
		<a href="add-to-cart.php?id=REALME X7 MAX 5G">Add to cart</a>
		<h4>Price:25000</h4>
	</div>
	<div class="product">
		<h3>ONEPLUS NORD.</h3>
		<a href="add-to-cart.php?id=ONEPLUS NORD">Add to cart</a>
		<h4>Price:65000</h4>
	</div>
	<div class="product">
		<h3>MI 10I.</h3>
		<a href="add-to-cart.php?id=MI 10I">Add to cart</a>
		<h4>Price:20000</h4>
	</div>
	<div class="product">
		<h3>SAMSUNG GALAXY A52</h3>
		<a href="add-to-cart.php?id=SAMSUNG GALAXY A52">Add to cart</a>
		<h4>Price:47000</h4>
	</div>
	<div class="product">
		<h3>VIVO V20 PRO 5G.</h3>
		<a href="add-to-cart.php?id=VIVO V20 PRO 5G">Add to cart</a>
		<h4>Price:30000</h4>
	</div>

	<br><br>
	<p style="color:green;text-align:center">Click here to <a href="contact-seller.php">Contact Seller</a></p>
	<br>
	<p>Click here to <a href="review.php">Review a product</a></p> 
	
	<!-- <p>Go Back to <a href="home-page.php">Homepage</a></p>  -->
	<?php 
	 include 'homepage-include.php' ?>
	<br><br>
	<?php 
	 include 'logout-include.php' ?>
	 <?php 
	 include 'footer.php' ?>
	

</body>
</html>