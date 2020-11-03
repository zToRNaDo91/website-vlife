
<?php 
$place = basename(getcwd()); 
if ($place == 'inc') {

header ('Location: ../');
} else {

$poste = $row['poste'];

?>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
}
</script>



				<section id="contact" class="contact inner-page ">
				<div class="container" data-aos="fade-up">
				
				<div class="section-title">
					  <h2>Partie Recrutement</h2>
					  </div>
				<div>
				<div class="php-email-form">
				<p align=center><?php
				$oral = $row['oral'];
				$id = $row['numero'];
				$poste = $row['poste'];
				$recrutoral = $row['recrutoral'];
				$pseudo = $row['username'];
				echo "<b>Salutation, ", $pseudo, '<br>' ;
				echo "Félicitations ! Vous avez été <f style='color:green'>accepté</f> à votre examen écrit <br>";
				echo 'Votre ID : '.$id.'<br>';
				echo 'Votre ID Discord : ', $user->id. '<br>'; 
				if ($oral == '') {
				echo '<div class="entretien">Vous avez désormais un entretien oral à passer. <br>';
				
				echo 'Avant toute chose, cliquer sur ce bouton : <button type="button" href="#" data-toggle="modal" data-target="#information" class="btn btn-info btn-fill copy"> informations</button></div>';
				echo '<p align=center>Le STAFF vLife.</p>';
				}
				if ($oral == 'Accepter')
				{
				echo '<hr>';
				echo "<br><br><center>Félicitations ! Vous avez également été <f style='color:green'>accepté</f> à l'oral. <br> Si vous n'avez pas reçu l'ensemble des informations ou rôles, veuillez contacter le recruteur chargé de votre dossier, $recrutoral via Discord.<br> ";
				echo 'Le STAFF vLife.</center>';
				} 
				
				?>
				</p></b>
				</div>
				</div>
				</section>
				 <div class="modal fade" id="information">
				<div class="modal-dialog">
					<div class="modal-content">
						
						<div class="modal-header">
							
							<h5 class="modal-title" align="center"><b>Information entretien oral</b></h5>
							<button type"button" class="close" data-dismiss="modal">&times;</button>
						</div>
						 
						<div class="modal-body">
							Préalable : <br>
							- Vous devez avoir pris le temps de lire la FAQ <i style="font-style:italic">(Disponible en cliquant sur votre pseudo en haut à droite)</i><br>
							- Vous devez être sûr d'être disponible avant de prendre rendez-vous.<br>
							- Du sérieux et une rigueur à toute épreuve.<br>
							- <?php 
							if ($poste == 'Opérateur 15') {
								$notif = '@Cadre SAMU';
							} elseif ($poste == 'Police' or $poste == 'Pompier' or $poste =='SAMU')
								{
								if ($poste == 'Police') {
								$notif = '@Officier PN'; 
								} elseif ($poste == 'Pompier') {
								 $notif ='@Officier SP' ;
								 } else { $notif = '@Cadre SAMU';}
							}else {
							$notif = '@Ressources Humaines 👨‍🎓';
							}
							
							
							echo '<b>Vous devez</b>
							<button class ="btn btn-info btn-fill copy" onclick="myFunction()">
							  copier
							  </button>* <b>le format</b>
							<textarea style ="white-space: pre-line;height:0px;width:0px;resize:none;" type="text" 
							id="myInput" readonly>'.$notif.'
**Numéro de candidature** : $'.$id.'
**Pseudo** : '.$pseudo.'
**Poste** : '.$poste.'
**ID Discord** '.$user->id.'
**Disponibilité** : *Veuillez remplacer par vos disponibilités*</textarea><br><small>*Le bouton sert à copier le format.</small>'; ?>
							 <br>
							
						<hr>
							 <p align="left">
							Après quoi;<br>
							Vous devez <b>prendre un rendez-vous</b> avec le recruteur charger du corps de métier 
							<?php if ($poste == 'Opérateur 15') {
							echo 'SAMU';
							} else {echo $row['poste'];}?>, <b>via le salon rendez-vous.</b><br>
							Vous devez <b>préciser vos disponibilités dans la dernière ligne du format</b><br>
							Vous serez contacter sous un délai de 48h pour votre rendez-vous. <br>
							Vous aurez votre réponse d'entretien oral sous un délai de 24h.
							 </p>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
						</div>
						
					</div>
				</div>
			</div>      
				
				
<?php
}
?>		