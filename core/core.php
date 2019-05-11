<?php

$host  = 'localhost';
$user  = 'root';
$pass  = '';
$db    = 'kopassus';

$connect = new mysqli($host, $user, $pass, $db);
if($connect->connect_error){
	echo 'Database nya error';
}

?>
