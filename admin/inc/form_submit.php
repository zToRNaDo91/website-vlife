<?php 

include '../../inc/connect.php';
 
//insert into database
if(!empty($_POST)) {
 $checkbox = $_POST['checkbox'];
 mysqli_query($mysqli, "UPDATE category SET name=".$checkbox." WHERE id='6'"); 
 
 // check if close
 if ($checkbox == 1) {
 echo "<p class='text-right'>Vous avez fermer le formulaire</p>";
 } else { 
  echo "<p class='text-right'>Vous avez ouvert le formulaire</p>";
 
 }
 }
 mysqli_close($mysqli);

?>