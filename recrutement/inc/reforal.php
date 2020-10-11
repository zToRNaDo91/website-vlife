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
				echo "Nous sommes au regret de vous annoncer que vous avez été <f style='color:red'>refusé</f> à l'oral<br>";
				echo "Pour la raison suivante : ", $row['raison_oral'], "<br>";
				echo "Veuillez revenir le ", $date4, " pour pouvoir de nouveau postuler <br>";				
				echo '<br>Pour toute demande, veuillez vous munir de ces informations :<br>';
				echo 'Votre STEAMID64 : ', $user->id, '<br>';
				echo 'Votre ID : '.$row['numero'], '<br><br>';
				echo 'Merci par avance de votre compréhension. <br>';
				echo 'Le STAFF vLife. </b>';
				?> 
				
				</p> </center></br>
					
				</div>
<?php
}
?>