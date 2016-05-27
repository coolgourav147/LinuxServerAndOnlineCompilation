<?php

session_start();
if($_SESSION['x']==="lock"){

	$src = $_POST['src'];
	$con = file_get_contents($src);

	//$src = "/var/www/html/mahimahi.txt";
	//echo "$src $con";

	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";


	echo "<pre>" . $con . "</pre>";


	echo "</div></body> </html>";
}

else{
	header('location: log_in.html');
}
?>
