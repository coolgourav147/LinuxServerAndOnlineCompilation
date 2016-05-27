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
		<p id='.'>List of Present Working Directory is :</p> <pre id='.'p'.'>'.shell_exec('ls').
		 '</pre></p></fieldset>';

	echo "<b>Advance Option For ls Command </b>";
	echo "<form action='ls1.php' method='POST'>
		<!-- <input type='directory' name='my' placeholder='select Folder Path' /> 
		<b>or</b> -->
		<input type='text' name='p' placeholder='Enter Folder Path' /><br />
		<input type='checkbox' name='a' value='a'>All (Hidden File Also Shown)<br />
		<input type='checkbox' name='l' value='l'>Long List <br />
		<input type='submit' value='Show List' />
		</form>";


	echo "</div></body> </html>";
}


else{
	header('location: log_in.html');
}

?>
