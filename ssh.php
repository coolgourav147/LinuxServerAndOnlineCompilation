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
			<legend><center>FOR SSH SERVER</center></legend>
			<form action='ssh1.php' method='POST'>
			<input type='submit' value='Check Install or Not' />
			</form>
			<form action='ssh2.php' method='POST'>
			<input type='submit' value='Install SSH' />
			</form>	
			<form action='ssh3.php' method='POST'>
			<input type='submit' value='REMOVE SSH' />
			</form>
			<form action='ssh4.php' method='POST'>
			<input type='submit' value='Check STATUS' />
			</form>
			<form action='ssh5.php' method='POST'>
			<input type='submit' value='START SSH' />
			</form>		
			<form action='ssh6.php' method='POST'>
			<input type='submit' value='STOP SSH' />
			</form>
			<form action='ssh7.php' method='POST'>
			<input type='submit' value='RESTART SSH' />
			</form>
			<form action='ssh8.php' method='POST'>
			<input type='submit' value='Edit Conf File' />
			</form>
		</fiedlset>";

	echo "</div></body></html>";

}


else{
	header('location: log_in.html');
}

?>
