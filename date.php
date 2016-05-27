<?php

session_start();
if($_SESSION['x']==="lock"){
	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";
	echo '<fieldset>
		<p id='.'>Today date is <b id='.'b'.'>'.shell_exec('date +%d').
		 ' '.shell_exec('date +%B').
		 ' '.shell_exec('date +%Y').'</b><br />
		 Today is<b id='.'b> '.shell_exec('date +%A').
		 '</b></p></fieldset>';
	echo "</div></body> </html>";
}
else{
	header('location: log_in.html');
}


?>
