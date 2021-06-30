<?php 
// if(isset($_POST['submit'])){

// }
define("filepath", "review.json");
$review="";
$reviewErr="";
$isValid = true;
$successfulMessage = $errorMessage = "";
if($_SERVER['REQUEST_METHOD'] === "POST") {
	$review=$_POST['review'];
	if(empty($review)){
			$reviewErr="Review box is empty!";
			$isValid=false;

		}
	if($isValid){
		$review=test_input($review);
		$filedata="review.json";
		if(file_exists('review.json')){
			$current_data = file_get_contents('review.json');
				$array_data=json_decode($current_data,true);
				$arr1=array("review" => $review);

		}
			$array_data [] =$arr1;
			$final_data =json_encode($array_data);
			
		
			if(file_put_contents('review.json', $final_data)) {
				$successfulMessage = "Successfull";
			}
			else {
				$errorMessage = "Error .";
			}
	}

	
		
		
}
	function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Notice</title>
</head>
<body>

	<form id="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Review</legend>
			<label for="review"> Review: </label>
			<textarea id="review" name="review" ></textarea>
			<span style="color:red"><?php echo $reviewErr;?></span>


	

		</fieldset>
		<br>
		<input type="submit" name="submit" value="submit">

		
	</form>
	<br>
	<?php 
	 include 'homepage-include.php' ?>
	<br><br>
	<?php 
	 include 'logout-include.php' ?>
	 <br>
	 <?php 
	 include 'footer.php' ?>
	

	

</body>
</html>
