<?php

session_start();
if($_SESSION['x']==='lock'){

	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";
	echo "<center> OR </center> \n<br />";



	echo "<br /><fieldset>
		<legend align='center'><b>For Delete A File Or Folder</b></legend>
		<form action='rm1.php' method='POST'><br />
		 <b>Select Folder and File Path: </b><input type='text' name='src' placeholder='Source File' /><br />
		<input type='submit' value='Delete' />
		<br /></form><br />
		</fieldset>";

}


else{
	header('location: log_in.html');
}

?>
