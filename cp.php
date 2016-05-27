<?php
session_start();
// echo $_SESSION['x'];
if($_SESSION['x']==='lock'){

	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";
	/*
	echo "<fieldset>
		<legend align='center'><b>For Copy A File</b></legend>
		<form action='cp1.php' method='POST'><br />
		 <b>Select Source File: </b><input type='file' name='src' placeholder='Source File' /><br />
		 <b>Enter Destination Path: <input type='text' name='des' placeholder='Enter Destination Path' /><br />
		<input type='submit' value='Show List' />
		<br /></form><br />
		</fieldset> <br />";
	*/
	echo "<center> OR </center> \n<br />";



	echo "<br /><fieldset>
		<legend align='center'><b>For Copy A File Or Folder</b></legend>
		<form action='cp1.php' method='POST'><br />
		 <b>Select Source Path: </b><input type='text' name='src' placeholder='Source File' /><br />
		 <b>Enter Destination Path: <input type='text' name='des' placeholder='Enter Destination Path' /><br />
		<input type='submit' value='Copy' />
		<br /></form><br />
		</fieldset>";

	echo "</div></body></html>";
}
else {
	header('location: log_in.php');
}
?>
