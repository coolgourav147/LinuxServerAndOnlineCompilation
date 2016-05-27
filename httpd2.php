<?php
session_start();
if($_SESSION['x']==='lock'){

	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";

	$httpd= shell_exec('sudo yum install httpd -y');
	echo $httpd;
	echo "</div></body></html>";

}


else{
	header('location: log_in.html');
}
?>
