<?php

$my=$_POST['my'];

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
	<p id='.'>Calender of <b>'. $my . '</b>is:</p> <pre id='.'p'.'>'.shell_exec("cal $my").
	 '</pre></p></fieldset>';

echo "</div></body> </html>";
?>
