<!DOCTYPE html>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Your Profile</legend>
			<?php 
	define("filepath", "user-profile.json");
	function read() {
		$resource = fopen(filepath, "r");
		$fz = filesize(filepath);
		$fr = "";
		if($fz > 0) {
			$fr = fread($resource, $fz);
		}
		fclose($resource);
		return $fr;
	} 
	$data = read();
	$data =json_decode($data);

	foreach ($data as $data ) {
		// code...
		echo '<li>'."Fullname:"."\t". $data->fullname . '</li>';
		echo '<li>'."Username:"."\t". $data->username . '</li>';
		echo '<li>'."Password:"."\t". $data->password . '</li>';
		echo '<li>'."Date Of Brith:"."\t". $data->birthDate . '</li>';
		echo '<li>'."Gender:"."\t". $data->gender . '</li>';
		echo '<li>'."Email:"."\t". $data->email . '</li>';
		echo '<li>'."Phone:"."\t". $data->mobileNo . '</li>';
		echo '<li>'."Address:"."\t". $data->address . '</li>';
	}
	
	?>
			


		</fieldset>
		
	</form>

</body>
</html>


