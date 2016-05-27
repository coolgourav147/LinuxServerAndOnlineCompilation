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
		<form action='httpd.php' method='POST'>
		<input type='submit' value='HTTPD' />
		</form>
		<form action='samba.php' method='POST'>
		<input type='submit' value='SAMBA' />
		</form>	
		<form action='telnet.php' method='POST'>
		<input type='submit' value='TELNET' />
		</form>
		<form action='ssh.php' method='POST'>
		<input type='submit' value='SSH' />
		</form>";

echo "</div></body></html>";

}

else{
	header('location: log_in.html');
}

?>
