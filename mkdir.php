<?php

session_start();
if($_SESSION['x']==='lock'){

	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";



	echo "<br /><fieldset>
		<legend align='center'><b>For Make Folder</b></legend>
		<form action='mkdir1.php' method='POST'><br />
		 <b>Spacify Path: </b><input type='text' name='spc' placeholder='Source File' /><br />
		 <b>Enter Folder Name: <input type='text' name='fld' placeholder='Enter Destination Path' /><br />
		<input type='submit' value='Make Folder' />
		<br /></form><br />
		</fieldset>";

	echo "</div></body></html>";

}


else{
	header('location: log_in.html');
}

?>
