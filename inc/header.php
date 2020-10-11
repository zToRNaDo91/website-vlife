<!DOCTYPE html>
<?php
$place = basename(getcwd()); 
if ($place == 'inc') {

header ('Location: ../');
} else {
require ('inc/discord.php');

?>

	  <!-- =======================================================
	  * Template Name: Arsha - v2.2.0
	  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
	  * Author: BootstrapMade.com
	  * License: https://bootstrapmade.com/license/
	  ======================================================== -->	
<html lang="fr">
<body>
	
	<!-- ======= Header ======= -->
	  <header id="header" class="fixed-top ">
		<div class="container d-flex align-items-center">

		  <h1 class="logo mr-auto"><a href="index.php">vLife RP</a></h1>
		  <!-- Uncomment below if you prefer to use an image logo -->
		  <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

		  <nav class="nav-menu d-none d-lg-block">
			<ul>
			  <li class="active"><a href="index.php">Accueil</a></li>
			  <li><a href="partenaire.php">Partenaire</a></li>
			  <li><a href="#about">Présentation</a></li>
			  <li><a href="#services">Caractéristiques</a></li>
			  <li><a href="#portfolio">Portfolio</a></li>
			  <li><a href="#team">Team</a></li>
			 <!--<li class="drop-down"><a href="">Drop Down</a>
				<ul>
				  <li><a href="#">Drop Down 1</a></li>
				  <li class="drop-down"><a href="#">Deep Drop Down</a>
					<ul>
					  <li><a href="#">Deep Drop Down 1</a></li>
					  <li><a href="#">Deep Drop Down 2</a></li>
					  <li><a href="#">Deep Drop Down 3</a></li>
					  <li><a href="#">Deep Drop Down 4</a></li>
					  <li><a href="#">Deep Drop Down 5</a></li>
					</ul>
				  </li>
				  <li><a href="#">Drop Down 2</a></li>
				  <li><a href="#">Drop Down 3</a></li>
				  <li><a href="#">Drop Down 4</a></li>
				</ul>
			  </li>-->
			  <li><a href="#contact">Contact</a></li>
			</ul>
			</nav>
				<!--  <div class="dropdown">
					  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown button
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					  </div>
					</div>-->
		  <!-- .nav-menu -->
			<?php 
			
			if(session('access_token')) {
			require ('inc/discord_staff.php');
			$user = apiRequest($apiURLBase); 
				echo '<div class="dropdown"> 
				<button type="button" style="background-color: transparent; " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href = "#" class="get-started-btn  dropdown-toggle"><img class="rounded-circle" src=" https://cdn.discordapp.com/avatars/'. $user->id .'/'. $user->avatar .'.png?size=128" width ="30">'. $user->username. '
				</button>
				<div class="dropdown-menu" style ="text-align: center;" aria-labelledby="dropdownMenuButton">';
				 if ($admin or $recruteur){ ?>
				<a class="dropdown-item" href="admin">Panel Staff</a>
				<a class="dropdown-item" href="recrutement">Nous rejoindre</a>
				<?php }?>
				
				<a type="button" class="dropdown-item" data-toggle="modal" data-target="#FAQ">Foire aux questions</a>
				<hr>
				<a class="dropdown-item" href="?action=logout">Déconnexion</a>
				</div></div>'
				
			
			
			<?php }
			else {
				echo'<a href="?action=login" class="get-started-btn scrollto">Connexion</a>';
			}
			?>
			
		</div>
		
	  </header><!-- End Header -->
	  <div class="modal fade faq" id="FAQ" tabindex="-1" role="dialog" aria-labelledby="FAQLabel" aria-hidden="false">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="FAQLabel">Foire aux questions</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<div class="section-title">
			  <h2 style="color:black;">Les questions souvent posées</h2>
			  <p>Vous trouverez ici plusieurs réponses à vos questions concernant le recrutement. Si malgré tout vous nécessitez une assistance, merci de passer par le discord, ou à défaut le formulaire de contact.</p>
			</div>

			<div class="faq-list" style="padding:0px;">
			  <ul>
				<li data-aos="fade-up" data-aos-delay="100">
				  <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1"> Quel est le délai de réponse suite à une candidature ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
				  <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
					<p>
					  Il est de 48h, sauf période festive où il peut être plus long. 
					</p>
				  </div>
				</li>

				<li data-aos="fade-up" data-aos-delay="200">
				  <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Quel est l'âge minimum d'entrée ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
				  <div id="faq-list-2" class="collapse" data-parent=".faq-list">
					<p>
					  L'âge minimal d'entrée pour le poste de civil est de 15 ans. 
					  Il est de 16 ans pour les services de secours, il n'y a aucune dérogation possible.
					</p>
				  </div>
				</li>

				<li data-aos="fade-up" data-aos-delay="300">
				  <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed"> L'expérience RP est-elle un critère d'évaluation important ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
				  <div id="faq-list-3" class="collapse" data-parent=".faq-list">
					<p>
					  Non. Même si vous n'avez pas d'expérience, cela ne pénalisera en rien votre candidature.
					</p>
				  </div>
				</li>

				<li data-aos="fade-up" data-aos-delay="400">
				  <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Si je suis professionnel du métier, serais-je favoriser ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
				  <div id="faq-list-4" class="collapse" data-parent=".faq-list">
					<p>
					  En aucun cas, nous privilégions l'équité entre les candidats, qu'importe votre statut, âge ou métier.
					</p>
				  </div>
				</li>

				<li data-aos="fade-up" data-aos-delay="500">
				  <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">J'ai postulé pour un service de secours et je souhaiterais devenir Civil, en attendant d'avoir ma réponse, est-ce possible ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
				  <div id="faq-list-5" class="collapse" data-parent=".faq-list">
					<p>
					  Cela n'est en aucun cas possible. Veuillez prendre votre mal en patience.
					</p>
				  </div>
				</li>
				
				<li data-aos="fade-up" data-aos-delay="600">
				  <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">Si je suis refusé à l'écris ou à l'oral que dois-je faire ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
				  <div id="faq-list-6" class="collapse" data-parent=".faq-list">
					<p>
					  En dehors d'un refus définitif ou d'un bannissement vous avez la possibilité de déposer une seconde candidature deux semaines après la date de votre refus. 
					  Le deuxième refus sera cependant définitif
					</p>
				  </div>
				</li>

			  </ul>
			</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
					  </div>
					</div>
				  </div>
				</div>
	</body>
</html>

<?php
}
?>