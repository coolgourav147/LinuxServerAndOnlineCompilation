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
	echo '<fieldset>
		<p id='.'>Calender of this Month is:</p> <pre id='.'p'.'>'.shell_exec('cal'. $my).
		 '</pre></p></fieldset>';

	echo "Enter any Month or Year to see Calender :";
	echo "<form action='cal1.php' method='POST'>
		<input type='text' name='my' placeholder='MM YYYY or Only YYYY' />
		<input type='submit' value='Show Calender' />
		</form>";


	echo "</div></body> </html>";
}
else {
	header('location: log_in.php');
}

?>
