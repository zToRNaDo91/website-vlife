<!DOCTYPE html>
<html lang="en">

		<head>
			<meta charset="utf-8">
			<meta content="width=device-width, initial-scale=1.0" name="viewport">

			<title>404 Erreur</title>
			<meta content="" name="description">
			<meta content="" name="keywords">
			<!-- Favicons -->
			<link rel="shortcut icon" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/favicon.ico" type="image/x-icon">
			<link rel="icon" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/favicon.png" type="image/png">
			<link rel="icon" sizes="32x32" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/favicon-32.png" type="image/png">
			<link rel="icon" sizes="64x64" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/favicon-64.png" type="image/png">
			<link rel="icon" sizes="96x96" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/favicon-96.png" type="image/png">
			<link rel="icon" sizes="196x196" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/favicon-196.png" type="image/png">
			<link rel="apple-touch-icon" sizes="152x152" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/apple-touch-icon.png">
			<link rel="apple-touch-icon" sizes="60x60" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/apple-touch-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/apple-touch-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/apple-touch-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/apple-touch-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/apple-touch-icon-144x144.png">
			<meta name="msapplication-TileImage" content="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/img/favicon/favicon-144.png">
			<meta name="msapplication-TileColor" content="#FFFFFF">
			
			  <!-- Google Fonts -->
		  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		  <!-- Vendor CSS Files -->
		  <link href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
		  <link href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		  <link href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
		  <link href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/venobox/venobox.css" rel="stylesheet">
		  <link href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
		  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

		  <!-- Template Main CSS File -->
		  <link href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/css/style.css" rel="stylesheet">
		  <link href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/css/404.css" rel="stylesheet">
		  <!-- ======= Header ======= -->
		  
		  <!-- =======================================================
		  * Template Name: Arsha - v2.2.0
		  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
		  * Author: BootstrapMade.com
		  * License: https://bootstrapmade.com/license/
		  ======================================================== -->
		</head>

<body>
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
          <li><a href="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>index.php">Accueil</a></li>
          <li>404</li>
        </ol>
        <h3>404 Erreur</h3>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
	<div class="container">
		<div class="error-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="error-text">
							<h1 class="error">404 Erreur</h1>
							<div class="im-sheep">
								<div class="top">
									<div class="body"></div>
									<div class="head">
										<div class="im-eye one"></div>
										<div class="im-eye two"></div>
										<div class="im-ear one"></div>
										<div class="im-ear two"></div>
									</div>
								</div>
								<div class="im-legs">
									<div class="im-leg"></div>
									<div class="im-leg"></div>
									<div class="im-leg"></div>
									<div class="im-leg"></div>
								</div>
							</div>
							<h4>Oups! La page que vous recherchez n'a pas pu être trouvé!</h4>
							<p>Désoler la page que vous cherchez n'existe pas ou à été supprimé ou le nom à été changer.</p>
							<a href="index.php" class="btn btn-primary btn-round">Retour à l'accueil</a>
						</div>
					</div>
				</div>
			</div>
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

  <!-- Vendor JS Files -->
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo 'https://'. $_SERVER['HTTP_HOST'].'/';?>assets/js/main.js"></script>

</body>

</html>