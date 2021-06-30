<?php 
switch ($_SERVER['SCRIPT_NAME']) {
	case '/project-mid/login-form.php':
		// code...
	$CURRENT_PAGE ="Login";
	$PAGE_TITTLE ="Login Page";
		break;
	case '/project-mid/registration-form.php':
		// code...
	$CURRENT_PAGE ="Registration";
	$PAGE_TITTLE ="Registration Page";
		break;
		case '/project-mid/home-page.php':
		// code...
	$CURRENT_PAGE ="Home";
	$PAGE_TITTLE ="Home Page";
		break;
		case '/project-mid/add-to-cart.php':
		// code...
	$CURRENT_PAGE ="Add to cart";
	$PAGE_TITTLE ="Add to cart Page";
		break;
		case '/project-mid/shop-products.php':
		// code...
	$CURRENT_PAGE ="Products";
	$PAGE_TITTLE ="Shop products";
		break;
	
	default:
		// code...
		break;
}

?>