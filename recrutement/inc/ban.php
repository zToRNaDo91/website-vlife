<?php $place = basename(getcwd()); 
if ($place == 'inc') {

header ('Location: ../');
} else {
?>			
				<section id="contact" class="contact inner-page ">
				<div class="container" data-aos="fade-up">
				
				<div class="section-title">
					  <h2>Partie Recrutement</h2>
					  </div>
				<div>
				<div class="php-email-form">
				<p align=center>
				
				<?php
				$count = mysqli_query($mysqli, "SELECT discord, count(*) as duplicate
				FROM info WHERE discord = '".$user->id."'
				GROUP BY discord
				");
				$row11 = mysqli_fetch_assoc($count);
				$duplicate = $row11['duplicate'];
				$raison = $row['raison'];
				$raison2 = $row['raison_oral'];
				echo "<b>Salutation, ", $row['username'], '<br>' ;
				echo "Nous somme au regret de vous annoncer que ";
				if ($duplicate != 2) {
				echo "vous avez été <f style='color:red'>banni</f> du recrutement ! <br>";
				}
				if (!empty($raison)) {
				if ($duplicate != 2){
				echo 'Pour la raison suivante : ', $raison, '<br>';
				if ($raison == 'Trop jeune') {
				echo "En effet, l'âge minimum est de 15 ans, pour au moins accéder au rôle de civil. <br>";
				}
				}
				if ( !empty ($raison2)and $duplicate != 2) {
				} else if (empty($raison2) and $duplicate == 2 ) { 
				echo 'Vous avez été refuser pour la deuxième fois. Raison du deuxième refus : ', $raison, '<br> 
				En conséquence de quoi cela constitue un refus définitif ! <br>';}
				}
				if (!empty($raison2)) {
				if ($duplicate == 1) {
				echo "Vous avez été refusé définitement à votre premier entretien oral pour la raison suivante : ", $raison2, "<br>";
				}else {
				echo "Vous avez été refusé à l'oral pour la raison suivante : ", $raison2, "<br>";
				echo "Ce refus à l'oral étant sur votre deuxième candidature, cela constitue un refus définitif ! <br>";
				}
				}
				echo '<br>Pour toute demande, veuillez vous munir de ces informations :<br>';
				echo 'Votre DiscordID : ', $user->id, '<br>';
				echo 'Votre ID : '.$row['numero'], '<br><br>';
				echo 'Merci par avance de votre compréhension; <br> Le STAFF vLife. </b>';
				
				
				?> 
				
				</p> </center></br>
				</div>
				</div>
				</section>

<?php
}
?>				 
