<?php
//session_start();
//echo $_SESSION['x'];

session_start();
if($_SESSION['x']==='lock'){
	$my=$_POST['src'];

	//echo $my;
	/*
	$er=shell_exec("cal $my");
	echo $er;*/

	echo "<html>
	<head>
		<title>Basic Command</title>
		<link rel='stylesheet' type='text/css' href='test.css' >
	</head>
	<body><div id='d1'>";
	echo '<fieldset>
		<p id='.'><b>File Compressed </b>'.shell_exec("gzip -r $my").
		 '</pre></p></fieldset>';

	echo "</div></body> </html>";

}

else {
	header('location: log_in.php');
}
?>
