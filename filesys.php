<?php
session_start();
if($_SESSION['x']==='lock'){
echo "<html>
<head>
	<title>File System</title>
	<link rel='stylesheet' type='text/css' href='test.css' >
</head>
<body>
	<div id='d1'>
		<form action='crtfile.php' method='POST'>
			<input type='submit' name='crtfile' value='Create A File' /><br />
		</form>
		<form action='dspfile.php' method='POST'>
			<input type='submit' name='dspfile' value='Display A File' /><br />
		</form>
		<form action='edtfile.php' method='POST'>
			<input type='submit' name='edtfile' value='Edit A File' /><br />
		</form>
</html>";
}
else {
	header('location: log_in.php');
}
?>
