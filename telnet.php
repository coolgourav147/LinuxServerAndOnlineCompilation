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
			<legend><center>FOR TELNET SERVER</center></legend>
			<form action='telnet1.php' method='POST'>
			<input type='submit' value='Check Install or Not' />
			</form>
			<form action='telnet2.php' method='POST'>
			<input type='submit' value='Install TELNET' />
			</form>	
			<form action='telnet3.php' method='POST'>
			<input type='submit' value='REMOVE TELNET' />
			</form>
			<form action='telnet4.php' method='POST'>
			<input type='submit' value='Check STATUS' />
			</form>
			<form action='telnet5.php' method='POST'>
			<input type='submit' value='START TELNET' />
			</form>		
			<form action='telnet6.php' method='POST'>
			<input type='submit' value='STOP TELNET' />
			</form>
			<form action='telnet7.php' method='POST'>
			<input type='submit' value='RESTART TELNET' />
			</form>
			<form action='telnet8.php' method='POST'>
			<input type='submit' value='Edit Conf File' />
			</form>
		</fiedlset>";

	echo "</div></body></html>";

}


else{
	header('location: log_in.html');
}

?>
