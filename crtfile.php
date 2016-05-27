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



	echo "<br /><fieldset>
		<legend align='center'><b>Create A File</b></legend>
		<form action='crtfile1.php' method='POST'><br />
		 <b>Enter File Name With Extantion And Path: </b><input type='text' name='src' placeholder='Source File' /><br />
		 <textarea rows=30 cols=80 name='content'></textarea>'
		<input type='submit' value='Create File' />
		<br /></form><br />
		</fieldset>";

	echo "</div></body></html>";
}

else {
	header('location: log_in.php');
}
?>
