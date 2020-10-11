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
				<p align=center><?php
				echo "<b>Salutation, ", $row['username'], '<br>' ;
				echo "Votre candidature est en attente. <br>";
				echo "Le délai d'attente moyen est de 48h. <br>";
				echo '<br>Pour toute demande, veuillez vous munir de ces informations :<br>';
				echo 'Votre STEAMID64 : ', $user->id, '<br>';
				echo 'Votre ID : '.$row['numero'], '<br>';
				echo "<br>Merci par avance de votre patience; <br> Le Staff vLife. </b>";
				
				?>
				</p> </center></br>
				</div>
				</div>
				</section>

<?php
}
?>				 