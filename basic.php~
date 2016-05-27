<?php
session_start();
if($_SESSION['x']==='lock'){
echo "<html>
<head>
	<title>Basic Command</title>
	<link rel='stylesheet' type='text/css' href='test.css' >
</head>
<body>
	<div id='d1'>
		<form action='date.php' method='POST'>
			<input type='submit' name='date' value='date' /><br />
		</form>
		<form action='whoami.php' method='POST'>
			<input type='submit' name='Who Are You' value='whoami' /><br />
		</form>
		<form action='cal.php' method='POST'>
			<input type='submit' name='calender' value='Calender' /><br />
		</form>
		<form action='ls.php' method='POST'>
			<input type='submit' name='ls' value='List of PWD Directory' /><br />
		</form>
		<form action='cp.php' method='POST'>
			<input type='submit' name='cp' value='Copy A File and Folder' /><br />
		</form>
		<form action='rm.php' method='POST'>
			<input type='submit' name='rm' value='Delete A File And Folder' /><br />
		</form>
		<form action='mkdir.php' method='POST'>
			<input type='submit' name='mk' value='Make A Folder' /><br />
		</form>
		<form action='crtfile.php' method='POST'>
			<input type='submit' name='crtfile' value='Create A File' /><br />
		</form>
		<form action='dspfile.php' method='POST'>
			<input type='submit' name='dspfile' value='Display A File' /><br />
		</form>
		<form action='edtfile.php' method='POST'>
			<input type='submit' name='edtfile' value='Edit A File' /><br />
		</form>
		<form action='comp.php' method='POST'>
			<input type='submit' name='comp' value='Compress' /><br />
		</form>
		<form action='uncomp.php' method='POST'>
			<input type='submit' name='comp' value='Uncompress' /><br />
		</form>
</html>";
}
else {
	header('location: log_in.php');
}
?>
