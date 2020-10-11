<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="fr">
<?php
require ('inc/discord.php');
if(session('access_token')) {
require ('../inc/discord_staff.php');
if ($admin or $recruteur) {
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Présentation</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	
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
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
	
	
	
</head>

<body>
   <?php include 'inc/header3.php';?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row" id="typo">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
								
                                    <div class="typography-line">
                                        <h3 class="text-center"> Information relative au Recrutement </h3>
                                    </div>
                                    <div class="typography-line">
                                        <h4>Concernant l'examen écrit : </h4>
                                    </div>
                                    <div class="typography-line">
                                        <p class="text-justify">La durée de traitement d'une candidature écrit est de maximums 48h, veuillez respecter au maximum ce délai.<br>
Pour information l'heure à la quel vous refuser une personne lui est indiquée. Faite attention à votre choix de réponse pour une candidature, il sera définitif !<br>
Seul un admin peut modifier la réponse autant de fois qu'il le souhaite et si votre réponse est modifiée par un admin, cela sera préciser.<br>
Le candidat n'a le droit qu'à deux chances et s'il est refuser pour la deuxième fois, il sera automatiquement banni<br>
Les candidatures peuvent être traitées dans le désordre. Mais pour un principe d'équité et de logique, merci de faire les candidatures dans l'ordre reçu.<br>
Si vous pensez ne pas pouvoir être impartial vis-à-vis de la candidature que vous traitez, évitez de la faire et demander à un autre recruteur</p>
                                    </div>
                                    <div class="typography-line">
                                        <h4>Concernant le critère d'âge :</h4>
                                    </div>
                                    <div class="typography-line">
                                        <p class="text-justify">Si une personne à 14 ans, il sera automatiquement refusé.<br>
										Cependant les informations sont tout de même récupérées et lisibles<br>
										Si une personne anciennement âgée de 14 ans en fait la demande par tous les moyens,<br>
										seul un admin pourra supprimer son ancienne candidature et ainsi lui redonner un accès normal.<br>
										Sous peine de quoi il risque de perdre une chance sur deux. </p>
                                    </div>
                                    <div class="typography-line">
                                        <h4>Concernant l'entretien oral</h4>
                                    </div>
                                    <div class="typography-line">
                                        <p class="text-justify">
								La durée de réponse d'un entretien oral est de maximums 24h, veuillez respecter au maximum ce délai.<br>
								Une fois accepter la prise de rendez-vous se fait directement sur Discord, via le salon rendez-vous, puis par MP.<br>
								Vous pouvez directement donner la réponse d'entretien oral sur le site et commenter.<br>
								Lorsque vous refusez une personne à l'oral, elle aura le droit à une deuxième chance à l'écrit.<br>
								Si le refus à l'oral a été fait sur la deuxième candidature, cela équivaut à un refus définitif et il sera banni en conséquence !<br>
								La raison du refus de l'oral est libre. Le commentaire n'est pas public et est réservé aux personnels.<br>
								Seul la personne qui à fait l'entretien oral doit rédiger la "Partie orale". L'admin n'a pas accès à la partie orale<br>


										</p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
			include 'inc/footer2.php';
			?>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script>
$(document).ready(function() {
$.each($('#navi').find('li'), function() {
			$(this).toggleClass('active', 
				window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
			}); 
});
</script>
<script src="../assets/js/demo.php"></script>

<?php
} else {
  header('Location: ../404.php');
  exit();
}
}else {
  header('Location: inc/loginpage.php');
  exit();
}
?>
</html>
