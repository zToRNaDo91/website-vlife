

<?php
require ('discord.php');
if(session('access_token')) {
require ('../../inc/discord_staff.php');
if ($admin) {
require '../../inc/connect.php';
$ids = $_GET['id'];
	$result = mysqli_query($mysqli, " SELECT * from info WHERE info.numero='".$ids."' ORDER BY `numero` DESC LIMIT 1"); 
	$result2 = mysqli_query($mysqli, 'SELECT numero FROM info ORDER BY numero DESC LIMIT 1');
	$row = mysqli_fetch_assoc($result);
	$row2 = mysqli_fetch_assoc($result2);
$numero = $row ['numero'];
	if(isset($numero) && is_numeric($ids)) 
{
	
		
		mysqli_query($mysqli,'DELETE FROM info
		WHERE numero = '.$ids.'' );
		mysqli_query($mysqli,'DELETE FROM recruteur
		WHERE numero2 = '.$ids.' '  );
		
		
		$numero2 = $row2['numero'];
		if ($ids == $numero2){ 

		mysqli_query($mysqli,'ALTER TABLE `info` auto_increment = '.$numero2.'');
		}
		

		mysqli_close($mysqli);
		
		?>		
		
<script>
alert("Candidature supprimer !");
javascript:window.history.go(-1)
</script>

<?php	
} else 
{?>
<script>
alert("Cette candidature n'existe pas !");
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
