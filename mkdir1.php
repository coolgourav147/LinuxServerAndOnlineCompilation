<?php

session_start();
if($_SESSION['x']==='lock'){


	$src=$_POST['spc'];
	$des=$_POST['fld'];
	$path="$src/$des";

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
		<p id='.'>List of <b>'. $p . '</b>is:</p> <pre id='.'p'.'>'.shell_exec("sudo mkdir -v $path").
		 '</pre></p></fieldset>';

	echo "</div></body> </html>";

}


else{
	header('location: log_in.html');
}

?>
