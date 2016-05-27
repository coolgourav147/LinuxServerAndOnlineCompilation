<?php

session_start();
if($_SESSION['x']==='lock'){



	$src=$_POST['src'];
	//$src="/var/www/html";
	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";
	#echo shell_exec("sudo rm -rvf $src");
	echo '<fieldset>
		<p id='.'>List of <b>'. $p . '</b>is:</p> <pre id='.'p'.'>'.shell_exec("sudo rm -rvf $src").
		 '</pre></p></fieldset>';

	echo "</div></body> </html>";
}


else{
	header('location: log_in.html');
}

?>
