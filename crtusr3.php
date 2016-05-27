<?php
session_start();
if($_SESSION['x']==='lock'){
	echo "<html>
<head>
	<title>Create User</title>
	<link rel='stylesheet' type='text/css' href='crtusr.css' />
</head>
<body>
	<div id='d1'>
		<form id='frm1' method='POST' action='crtusr2.php' '>
			<fieldset>
				<legend>Delete User</legend>
				<center>
					<b align=>User Name:</b><input id='u' type='text' name='u' placeholder='User Name'/><br />
					<p id='usr'></p>
					<p id='re'></p>
					<input type='submit' value='Delete User'  /><br />
				</center>
			</fieldset>
		
		</form>
	</div>
</body>
<html>";
}
else{
	header('location: log_in.php');
}


?>
