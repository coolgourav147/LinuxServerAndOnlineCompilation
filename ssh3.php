<?php

session_start();
if($_SESSION['x']==='lock'){

	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";

	$var= shell_exec('sudo rpm -e openssh-server');
	echo "telnet-server is successfully uninstalled";
	echo "</div></body></html>";

}


else{
	header('location: log_in.html');
}

?>
