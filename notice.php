
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Notice</title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Notice</legend>
			<?php 
	define("filepath", "notice.json");
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
		echo '<li>'."notice:"."\t". $data->notice . '</li>';
		
	}
	
	?>




		</fieldset>
		
	</form>

	

</body>
</html>
