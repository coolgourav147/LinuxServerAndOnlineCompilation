<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
//echo $user;
//echo $pass;

if($user==='root' && $pass==='toor'){
	session_start();
	$_SESSION['x']="lock";
	header('location:home.php');	
}
else{
	header('location:log_in1.html');
}


?>
