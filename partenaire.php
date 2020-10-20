<!DOCTYPE html>
<html lang="fr">

		<head>
			<meta charset="utf-8">
			<meta content="width=device-width, initial-scale=1.0" name="viewport">

			<title>Partenaire</title>
			<meta content="" name="description">
			<meta content="" name="keywords">
			<!-- Favicons -->
			<link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
			<link rel="icon" href="assets/img/favicon/favicon.png" type="image/png">
			<link rel="icon" sizes="32x32" href="assets/img/favicon/favicon-32.png" type="image/png">
			<link rel="icon" sizes="64x64" href="assets/img/favicon/favicon-64.png" type="image/png">
			<link rel="icon" sizes="96x96" href="assets/img/favicon/favicon-96.png" type="image/png">
			<link rel="icon" sizes="196x196" href="assets/img/favicon/favicon-196.png" type="image/png">
			<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-touch-icon.png">
			<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-touch-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-touch-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-touch-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-touch-icon-144x144.png">
			<meta name="msapplication-TileImage" content="assets/img/favicon/favicon-144.png">
			<meta name="msapplication-TileColor" content="#FFFFFF">
			
			  <!-- Google Fonts -->
		  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		  <!-- Vendor CSS Files -->
		  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
		  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
		  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
		  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
		  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

		  <!-- Template Main CSS File -->
		  <link href="assets/css/style.css" rel="stylesheet">
		  <link rel="stylesheet" href="assets/css/cookiealert.css">
		 
			

		  <!-- =======================================================
		  * Template Name: Arsha - v2.2.0
		  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
		  * Author: BootstrapMade.com
		  * License: https://bootstrapmade.com/license/
		  ======================================================== -->
		</head>

<body>
	 <!-- ======= Header ======= -->
	 <?php
		 require ('inc/settings.php');
		 require ('inc/discord.php'); 
		  if(session('access_token')) {
			require ('inc/discord_staff.php');
		}
		  include 'inc/header2.php';
		 
			?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Accueil</a></li>
          <li>Partenaire</li>
        </ol>
        <h3>Partenaire de vLife RP</h3>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page" id="partenaire">
      <div class="container" data-aos="fade-up">
		<img src="assets/img/commods.png" alt="ComMods" ><br><br>
		<p>ComMods est une communauté de modding, ayant pour but de partager leurs savoir-faire et mods. <br>
		Elle est remplie de passionnés, formateurs et élèves. Ils sont d'ailleurs toujours à la recherche de passionnés désirant apprendre.<br>
		Pour certains, spécialisé dans la modélisation 3D, d'autres dans le développement.<br>
		Ils nous apportent une assistance professionnel, efficace, avec une équipe soudée et harmonieuse.<br>
		Notamment en nous offrant de nombreuses exclusivités, que vous retrouverez sur le serveur en nous rejoignant.
		
		</p>
			<div class="social">
					  <a href="https://twitter.com/CommodsOfficiel" target="_blank"><i class="ri-twitter-fill"></i></a>
					  <a href="https://www.youtube.com/channel/UC8VlMFvdfb-0MsH_oazxAQg" target="_blank"><i class="ri-youtube-fill"></i></a>
					  <a href="https://discord.gg/vCaKAvZ" target="_blank"><i class="ri-discord-fill"></i></a>
					  <a href ="https://www.commods.fr/" target="_blank"><i class="bx bx-link"></i></a>
			</div>
      </div>
    </section>

  </main><!-- End #main -->
	<?php
	require 'inc/settings.php';
	include 'inc/footer.php';
	?>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  <!-- Alert Cookie -->
	<div class="alert text-center cookiealert" role="alert">
    <b>A ce que vous aimez les cookies?</b> &#x1F36A; Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies. <a href="https://www.vliferoleplay.fr/mentions.php#cookie" target="_blank">En savoir plus</a>
    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        J'accepte
    </button>		

  <!-- Include cookiealert script -->
  <script src="assets/js/cookiealert.js"></script>	
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
	$(document).ready(function() {
	$.each($('#nav').find('li'), function() {
				$(this).toggleClass('active', 
					window.location.pathname.indexOf($(this).find('a').attr('name')) > -1);
				}); 
	});
	</script>

</body>

</html>