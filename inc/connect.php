<?php 
$user = 'root'; 
$pass = ''; 
$db = 'vlife'; 
$mysqli = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect"); 
$mysqli->set_charset('utf8');
?>