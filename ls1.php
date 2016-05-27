<?php

session_start();
if($_SESSION['x']==='lock'){


	$a=$_POST['a'];
	$l=$_POST['l'];
	$p=$_POST['p'];

	//echo "$a $l $p"
	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";

	echo '<fieldset>
		<p id='.'>List of <b>'. $p . '</b>is:</p> <pre id='.'p'.'>'.shell_exec("sudo ls -$a -$l $p").
		 '</pre></p></fieldset>';

	echo "</div></body> </html>";

}


else{
	header('location: log_in.html');
}

?>
