
<?php
require ('discord.php');
if(session('access_token')) {
require ('../../inc/discord_staff.php');
if ($admin) {
$ids = $_GET['id'];
	require '../../inc/connect.php';
	$result = mysqli_query($mysqli, " SELECT * from staff WHERE staff.numero='".$ids."' ORDER BY `numero` DESC LIMIT 1"); 
	$result2 = mysqli_query($mysqli, 'SELECT numero FROM staff ORDER BY numero DESC LIMIT 1');
	$row = mysqli_fetch_assoc($result);
	$row2 = mysqli_fetch_assoc($result2);
$numero = $row ['numero'];
//if (in_array($matches[1], $admin_ids)) {
	if(isset($numero) && is_numeric($ids)) 
{
	
		
		mysqli_query($mysqli,'DELETE FROM staff
		WHERE numero = '.$ids.'' );
		
		
		$numero2 = $row2['numero'];
		if ($ids == $numero2){ 

		mysqli_query($mysqli,'ALTER TABLE `staff` auto_increment = '.$numero2.'');
		}
		

		mysqli_close($mysqli);
		
		?>		
		
<script>
alert("Staff supprimer !");
javascript:window.history.go(-1)
</script>

<?php	
} else 
{?>
<script>
alert("Ce Staff n'existe pas !");
javascript:window.history.go(-1)
</script>
<?php
}	
		
} else {
mysqli_close($mysqli);

?>

<script>
alert("Vous n'êtes pas admin !");
javascript:window.history.go(-1)
</script>
<?php
}
}
?>
