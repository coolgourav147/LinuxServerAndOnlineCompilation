<?php

session_start();
if($_SESSION['x']==='lock'){

	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";

	echo  shell_exec('sudo rpm -q telnet-server');
	echo "</div></body></html>";

}


else{
	header('location: log_in.html');
}

?>
