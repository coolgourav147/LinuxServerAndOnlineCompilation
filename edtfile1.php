<?php

session_start();
if($_SESSION['x']==="lock"){


$src = $_POST['src'];
$con = file_get_contents($src);

echo "<html>
<head>
	<title>Basic Command</title>
	<link rel='stylesheet' type='text/css' href='test.css' >
</head>
<body><div id='d1'>";

echo "<form action='crtfile1.php' method='POST'>
	<b>Path of Source File</b><input type='text' name='src' value=\"$src\" /><br />
	<textarea rows=30 cols=80 name='content'>".$con."</textarea>'
	<input type='submit' value='Create File' />
	</form>";

echo "</div></body> </html>";

}



else{
	header('location: log_in.html');
}
