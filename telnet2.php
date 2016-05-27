<?php

session_start();
if($_SESSION['x']==='lock'){

	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";

	echo "<pre>" .  shell_exec("sudo rpm -ivh /home/tiger/Packages/telnet-server-0.17-58.fc20.x86_64.rpm") . "</pre>" ;
	echo "</div></body></html>";
}



else{
	header('location: log_in.html');
}

?>
