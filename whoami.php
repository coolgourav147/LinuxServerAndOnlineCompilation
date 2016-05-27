<?php

session_start();
if($_SESSION['x']==='lock'){

echo "<html>
<head>
	<title>Basic Command</title>
	<link rel='stylesheet' type='text/css' href='test.css' >
</head>
<body><div id='d1'>";
echo '<fieldset>
	<p id='.'>This Time you work as <b id='.'b'.'>'.shell_exec('whoami').
	 '</b>User</p></fieldset>';
echo "</div></body> </html>";


}


else{
	header('location: log_in.html');
}

?>
