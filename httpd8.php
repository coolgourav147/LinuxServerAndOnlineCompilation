<?php

session_start();
if($_SESSION['x']==='lock'){

	$path='/etc/httpd/conf/httpd.conf';
	$file=file_get_contents($path);
	echo "<form action='httpd8.php' method='POST'>";
	echo '<textarea rows=10 cols=80 name=\'content\'>'.$file.'</textarea>';
	echo "<input type='submit' name='save' value='save'>";
	echo '</form>';

	if(isset($_POST['save']))
	{
	$con=$_POST['content'];
	shell_exec('sudo echo "'.$con.'" >'. $path);
	}

}


else{
	header('location: log_in.html');
}

?>
