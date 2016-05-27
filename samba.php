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
			<legend><center>FOR SAMBA SERVER</center></legend>
			<form action='samba1.php' method='POST'>
			<input type='submit' value='Check Install or Not' />
			</form>
			<form action='samba2.php' method='POST'>
			<input type='submit' value='Install SAMBA' />
			</form>	
			<form action='samba3.php' method='POST'>
			<input type='submit' value='REMOVE SAMBA' />
			</form>
			<form action='samba4.php' method='POST'>
			<input type='submit' value='Check STATUS' />
			</form>
			<form action='samba5.php' method='POST'>
			<input type='submit' value='START SAMBA' />
			</form>		
			<form action='samba6.php' method='POST'>
			<input type='submit' value='STOP SAMBA' />
			</form>
			<form action='samba7.php' method='POST'>
			<input type='submit' value='RESTART SAMBA' />
			</form>
			<form action='samba8.php' method='POST'>
			<input type='submit' value='Edit Conf File' />
			</form>
		</fiedlset>";

	echo "</div></body></html>";

}


else{
	header('location: log_in.html');
}
?>
