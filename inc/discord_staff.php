<?php
	require 'connect.php';
	$user = apiRequest($apiURLBase);
	$staff = mysqli_query($mysqli, " SELECT * from staff  WHERE discord_id='". $user->id ."' ORDER BY `numero` DESC LIMIT 1"); 
	 $rows= mysqli_fetch_assoc($staff);
	 
	 $role = $rows['role'];
     $staff_name = $rows['nom'];
	 $admin = false;
	 $recruteur = false;
	if(mysqli_num_rows($staff)==1) {
		if ($role == 'Recruteur') {
		$recruteur=true;
		}
		if ($role == 'Admin') { 
		$admin = true;
		}
	}
	mysqli_close($mysqli);
?>