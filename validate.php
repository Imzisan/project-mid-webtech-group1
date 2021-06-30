<?php
	$user1 = "IAMZ1SAN";
	$password1 = "123";

	if(isset($_POST['login'])){
		$username= $_POST['username'];
		$password= $_POST['password'];
		if($username == $user1 && $password == $password1){
			if(isset($_POST['rememberme'])){
			setcookie('username',$username,time()+60*60*7);


		} 
		session_start();
			$_SESSION['username']=$username;
			header("location: welcome.php");
       }else{
			echo "Email or Password invalid. <br>click here to <a href='login-form.php'> try again </a>";
		}

	}	else{
		header("location: login-form.php");
	}
	?>

 