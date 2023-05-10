<?php
	$username = $_POST['uname'];
	$password = $_POST['pwd'];
	$file = fopen("users.txt","w");
	fwrite($file,$username." ".$password);
	echo "Register is Succesfull!"
?>
