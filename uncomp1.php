<?php


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
echo '<fieldset>';
	#shell_exec("sudo gunzip -r $my 2>&1",$output,$return_value);
	exec("sudo gunzip $my 2>&1",$output,$return_value);
if($return_value == 0){

echo "<b>File Uncompressed</b>";

}


else {

echo "<b>File not Not Uncompressed</b>";

}




echo	 '</pre></p></fieldset>';

echo "</div></body> </html>";


}


else{
	header('location: log_in.html');
}
?>
