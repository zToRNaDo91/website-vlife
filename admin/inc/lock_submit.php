<?php

if(!empty($_POST)) {
include '../../inc/connect.php';
 $checkbox = $_POST['checkbox'];
 $sql = 'UPDATE info SET category_id="'.$checkbox.'" WHERE numero="'.$_GET['number'].'"'; 	
  if (mysqli_query($mysqli, $sql)) {
			   } else {
				  echo "Error updating record: " . mysqli_error($mysqli);
			   }
	$name = $mysqli->real_escape_string($_GET['name']);
	$name = str_replace ( '/', '#', $name);
	$sql2 = 'UPDATE info SET verrouiller="'.$name.'" WHERE numero="'.$_GET['number'].'"'; 	
  if (mysqli_query($mysqli, $sql2)) {
  } else {
				  echo "Error updating record: " . mysqli_error($mysqli);
    }
 mysqli_close($mysqli); 
 }
 
?>