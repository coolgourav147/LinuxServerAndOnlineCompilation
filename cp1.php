<?php
session_start();
// echo $_SESSION['x'];
if($_SESSION['x']==='lock'){
	$src=$_POST['src'];
	$des=$_POST['des'];

	//echo "$src $des";
	//$des="/media/2051-8038/";
	//$src="/var/www/html";
	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";
	#echo shell_exec("sudo cp -rvf $src $des");
	echo '<fieldset>
		<p id='.'>List of <b>'. $p . '</b>is:</p> <pre id='.'p'.'>'.shell_exec("sudo cp -rvf $src $des").
		 '</pre></p></fieldset>';

	echo "</div></body> </html>";
}
else {
	header('location: log_in.php');
}


?>
