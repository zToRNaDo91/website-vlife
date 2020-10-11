<?php 
$user = 'tydoo'; 
$pass = 'FiDQClGXPbCARSkr'; 
$db = 'web'; 
$mysqli = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect"); 
$mysqli->set_charset('utf8');
?>