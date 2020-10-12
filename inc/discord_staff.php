<?php
	require 'connect.php';
	$user = apiRequest($apiURLBase);
	$staff = mysqli_query($mysqli,"SELECT * from staff  WHERE discord_id='". $user->id ."' ORDER BY `numero` DESC LIMIT 1"); 
	$nb = mysqli_num_rows($staff);
	if ($nb==1) {
	 $rows= mysqli_fetch_assoc($staff);
	 $role = $rows['role'];
		 $staff_name = $rows['nom'];
		 
		if(mysqli_num_rows($staff)==1) {
			$recruteur = false;
			$admin = false;
			if ($role == 'Recruteur') {
			$recruteur=true;
			}
			if ($role == 'Admin') { 
			$admin = true;
			}
		}
	 
	 }	 else {
	$admin = false;
	 $recruteur = false; 	
	}
	mysqli_close($mysqli);
?>
	 