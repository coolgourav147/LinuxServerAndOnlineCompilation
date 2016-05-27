<?php

$u1=$_POST['u'];
$p1=$_POST['p'];

session_start();
if($_SESSION['x']==="lock"){
#echo "$u1 $p1";
echo "<html>
<head>
	<title>Basic Command</title>
	<link rel='stylesheet' type='text/css' href='test.css' >
</head>
<body><div id='d1'>";

$cr=exec("sudo useradd $u1 -p `openssl passwd -1 '$p1'` 2>&1",$output,$return_value);


#exec ('useradd sourav 2>&1', $output, $return_value);

if($return_value == 0){

echo "<b>user create sucessfully</b>";

}


else {

echo "<b>user not created</b>";

}


echo "</div></body></html>";
}
else{
header('location: log_in.html');
}

?>
