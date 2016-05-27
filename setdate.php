<?php

$tym=$_POST['tym'];

echo $tym;


shell_exec('sudo date --set=$tym')


?>
