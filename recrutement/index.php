<!DOCTYPE html>

		  <!-- =======================================================
		  * Template Name: Arsha - v2.2.0
		  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
		  * Author: BootstrapMade.com
		  * License: https://bootstrapmade.com/license/
		  ======================================================== -->
<html lang="fr">

		<head>
			<meta charset="utf-8">
			<meta content="width=device-width, initial-scale=1.0" name="viewport">

			<title>Recrutement</title>
			<meta content="" name="description">
			<meta content="" name="keywords">
			<!-- Favicons -->
			<link rel="shortcut icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon">
			<link rel="icon" href="../assets/img/favicon/favicon.png" type="image/png">
			<link rel="icon" sizes="32x32" href="../assets/img/favicon/favicon-32.png" type="image/png">
			<link rel="icon" sizes="64x64" href="../assets/img/favicon/favicon-64.png" type="image/png">
			<link rel="icon" sizes="96x96" href="../assets/img/favicon/favicon-96.png" type="image/png">
			<link rel="icon" sizes="196x196" href="../assets/img/favicon/favicon-196.png" type="image/png">
			<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon/apple-touch-icon.png">
			<link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicon/apple-touch-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/apple-touch-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicon/apple-touch-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-touch-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicon/apple-touch-icon-144x144.png">
			<meta name="msapplication-TileImage" content="../assets/img/favicon/favicon-144.png">
			<meta name="msapplication-TileColor" content="#FFFFFF">
			
			  <!-- Google Fonts -->
		  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		  <!-- Vendor CSS Files -->
		  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
		  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
		  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
		  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
		  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

		  <!-- Template Main CSS File -->
		  <link href="../assets/css/style.css" rel="stylesheet">
		  
		   <link href="assets/css/formulaire.css" rel="stylesheet">
		  <!-- ======= Header ======= -->
		  
		<script>
		'use strict';
		window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
		if (form.checkValidity() === false) {
		event.preventDefault();
		event.stopPropagation();
		}
		form.classList.add('was-validated');
		}, false);
		});
		}, false);
		</script>

		</head>

<body>
<?php
		require ('../inc/settings.php');
		 require ('../inc/discord.php'); 
		 if(session('access_token')) {
		require ('../inc/discord_staff.php');
		}
		include '../inc/header2.php';
		
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.php">Accueil</a></li>
          <li>Recrutement</li>
        </ol>
        <h3>Recrutement</h3>

      </div>
    </section><!-- End Breadcrumbs -->

	

	<?php
	if(session('access_token')) {
	require '../inc/connect.php';
	$user = apiRequest($apiURLBase);
	$result = mysqli_query($mysqli, " SELECT numero,discord,raison, recrutoral, raison_oral, date_traitement,poste, date_recrutoral, oral, category_id,username from info LEFT JOIN recruteur ON info.numero= recruteur.numero2 WHERE info.discord='". $user->id ."' ORDER BY `numero` DESC LIMIT 1"); 
			 $result0 = mysqli_query($mysqli, "SELECT discord,category_id FROM info WHERE category_id = '5' AND info.discord='". $user->id ."' ORDER BY `numero` DESC"); 
			 $result2 = mysqli_query($mysqli, "SELECT discord,category_id FROM info WHERE category_id = '1' AND info.discord='".$user->id."' ORDER BY `numero` DESC"); 
			 $result3 = mysqli_query($mysqli, "SELECT discord,category_id FROM info WHERE category_id = '2' AND info.discord='".$user->id."' ORDER BY `numero` DESC");
			  $result4 = mysqli_query($mysqli, "SELECT discord,category_id FROM info WHERE category_id = '3' AND info.discord='".$user->id."' ORDER BY `numero` DESC");
			  $result5= mysqli_query($mysqli, "SELECT discord,category_id FROM info WHERE category_id = '4' AND info.discord='".$user->id."' ORDER BY `numero` DESC"); 	
			 $formulaire = mysqli_query($mysqli,"SELECT `name` FROM `category` WHERE id='6'"); 
			$rowform = mysqli_fetch_assoc($formulaire);
			$form = $rowform['name'];
			 $row = mysqli_fetch_assoc($result);
			$nb = mysqli_num_rows($result);
			if ($nb == 1) {
			$date_est = $row ['date_traitement'];
			}
			else {
			$date_est = '';
			}
			$date0 = date("Y-m-d H:i:s", strtotime($date_est));
			$date = date("Y-m-d", strtotime($date_est));
			$timestamp = strtotime(date("d-m-Y H:i:s ", strtotime($date_est)) . " +2 week");
			$date2 = date("d/m/Y à H:i:s", $timestamp);
			// date traitement accepter
			if ($nb == 1) {
			$date_est2 = $row ['date_recrutoral'];
			}
			else {
			$date_est2 = '';
			}
			$date03 = date("Y-m-d H:i:s", strtotime($date_est2));
			$date3 = date("Y-m-d", strtotime($date_est2));
			$timestamp2 = strtotime(date("d-m-Y H:i:s ", strtotime($date_est2)) . " +2 week");
			$date4 = date("d/m/Y à H:i:s", $timestamp2);
			$derniere = false;
			if(mysqli_num_rows($result)>=1) {
				if (mysqli_num_rows($result2)>=1) {
				include 'inc/att.php';
				}
				else if (mysqli_num_rows($result3)>=1) {
					if ($row['oral'] == 'Refuser' and $row['category_id'] != 4) {
					include 'inc/reforal.php';
					// Pour mettre que la date : préciser CURDATE() et $date3
					mysqli_query($mysqli, "UPDATE info SET category_id = '5' WHERE info.discord='".$user->id."' AND CURRENT_TIMESTAMP() >=  DATE_ADD('$date03',INTERVAL 2 WEEK) ");
					} else {
					include 'inc/acc.php';
					}
				} else if (mysqli_num_rows($result4)>=1) {
			include 'inc/ref.php';
			 // Pour mettre que la date : préciser CURDATE() et $date
			$sql =  "UPDATE info SET category_id = '5' WHERE info.discord='".$user->id."' AND CURRENT_TIMESTAMP() >=  DATE_ADD('$date0',INTERVAL 2 WEEK) "; 
			if (mysqli_query($mysqli, $sql)) {
      //echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($mysqli);
   }
   
			} else if (mysqli_num_rows($result5)>=1) { 
			include 'inc/ban.php';
			}
			else if (mysqli_num_rows($result0)>=1){
			// if duplicate=3 then category_id = 4 (fait dans details.php)
			//echo "Refuser 2 semaine";
						
			if ($form!= '1') {
				$derniere = true;
				//include 'inc/derniere.php';
				include 'inc/formulaire.php';
				}
				else {
				echo '<section id="contact" class="contact inner-page ">
				 <div class="container" data-aos="fade-up">
				 
					<div class="section-title">
					  <h2>Partie Recrutement</h2>
					  <div class="php-email-form">
					  <p>Le formulaire est fermé</p>
						<i>Veuillez revenir ultérieurement.</i>
					 </div>
					</div>

				</div>
				</section>';
				}
				}
			}else {
			
			if ($form != '1') {
				include 'inc/formulaire.php';
				}
				else {
				echo '<section id="contact" class="contact inner-page ">
				 <div class="container" data-aos="fade-up">
				 
					<div class="section-title">
					  <h2>Partie Recrutement</h2>
					  <div class="php-email-form">
					  <p>Le formulaire est fermé</p>
						<i>Veuillez revenir ultérieurement.</i>
					 </div>
					</div>

				</div>
				</section>';
				}
			$category = 1;
			}
		mysqli_close($mysqli);
		} else { 
		echo '
		 <section id="contact" class="contact inner-page">
		 <div class="container" data-aos="fade-up">

			<div class="section-title">
			  <h2>Bulletin d\'adhésion</h2>
			  <p>Veuiller vous connectez pour accéder à ce contenu</p>
				<i>Merci de votre compréhension.</i>
			</div>
		</div>
		</section>';}
		?>
	


  </main><!-- End #main -->
	<?php
	require '../inc/settings.php';
	include '../inc/footer.php';
	?>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>