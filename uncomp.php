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
	<legend align='center'><b>Uncompress A File</b></legend>
	<form action='uncomp1.php' method='POST'><br />
	 <b>Enter File Path: </b><input type='text' name='src' placeholder='Source File' /><br />
	<input type='submit' value=Uncompress' />
	<br /></form><br />
	</fieldset>";

echo "</div></body></html>";


}


else{
	header('location: log_in.html');
}

?>
