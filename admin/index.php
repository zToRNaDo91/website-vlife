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
if ($admin) {
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Tableau de board</title>
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
	 <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
	 <link href="assets/css/style.css" rel="stylesheet" />

	

</head>

<body>

<?php include 'inc/header3.php';
/*
Temp remplir formulaire : http://jsfiddle.net/bNNwz/5/
<form method="post" action="http://jsfiddle.net/echo/html/">
    <input type="hidden" class="html" name="html"/>
    <input type="text" class="field"/>
    <input type="submit" />
</form>
// actual code
var formInitializationTime;

$('form').bind('submit', function () {
    document.querySelector('.html').value = 'The user spent <b>' + (new Date() - formInitializationTime) + 'ms</b> filling the form out';
});

$('form input').bind('keypress change click', function () {
    if (!formInitializationTime) formInitializationTime = new Date();
});

*/

require '../inc/connect.php';
		$requete = mysqli_query($mysqli, 'SELECT numero,discord, poste, username, email, age, category.name, date
		FROM info
		LEFT JOIN category ON info.category_id=category.id
		WHERE category_id=category.id
		ORDER BY numero DESC');
		$requete2 = mysqli_query($mysqli,'SELECT numero,discord, poste, username, email, age, category.name, date
		FROM info
		LEFT JOIN category ON info.category_id=category.id
		WHERE category.name="Accepter" 
		ORDER BY numero DESC');
		$requete3 = mysqli_query($mysqli,'SELECT numero,discord, poste, username, email, age, category.name, date
		FROM info
		LEFT JOIN category ON info.category_id=category.id
		WHERE category.name="Refuser" or category.name="Banni"
		ORDER BY numero DESC');
		$nb = mysqli_num_rows($requete);
		$nb2 = mysqli_num_rows($requete2);
		$nb3 = mysqli_num_rows($requete3);
?>
			
            <div class="content">
                <div class="container-fluid">
					<div class="row" id="stat">
							<div class="col-md">
								<div class="card">
										<div class="card-header">
											<figure class="sticker"><i class="nc-icon nc-notes"></i> </figure>
											<p class="card-category text-right">Candidature(s)<br><b class="card-title"><?php echo $nb; ?></b></p>
										</div>
										<div class="card-body">
											<hr>
											<div class="stats">
											<i class="fa fa-question-circle"></i>Nombre de candidatures total
											</div>
										</div>	
								</div>
							</div>
							<div class="col-md">
								<div class="card">
										<div class="card-header">
											<figure class="sticker green"><i class="nc-icon nc-check-2"></i> </figure>
											<p class="card-category text-right">Candidature Validé<br><b class="card-title"><?php echo $nb2; ?></b></p>
										</div>
										<div class="card-body">
											<hr>
											<div class="stats">
											<i class="fa fa-question-circle"></i>Nombre de candidatures accepté.
											</div>
										</div>	
								</div>
							</div>
							<div class="col-md">
								<div class="card">
										<div class="card-header">
											<figure class="sticker red"><i class="nc-icon nc-simple-remove"></i> </figure>
											<p class="card-category text-right">Candidature Refusé<br><b class="card-title"><?php echo $nb3; ?></b></p>
										</div>
										<div class="card-body">
											<hr>
											<div class="stats">
											<i class="fa fa-question-circle"></i>Nombre de candidatures refusé
											</div>
										</div>	
								</div>
							</div>
							<?php /*<div class="col-md">
								<div class="card">
										<div class="card-header">
											<figure class="sticker blue"><i class="nc-icon nc-watch-time"></i> </figure>
											<p class="card-category text-right">Temps de réponse<br><b class="card-title">24h</b></p>
										</div>
										<div class="card-body">
											<hr>
											<div class="stats">
											<i class="fa fa-question-circle"></i>Moyenne temps de réponse
											</div>
										</div>	
								</div>
							</div>*/?>
							
					</div>
				</div>
			
				
				
				<?php 
				/*
				<div class="container-fluid">
				
						<div class="col-md-2" style="max-width : 14%">
						<div class="card ">
						
						
                                <div class="card-header text-center ">
								  <p class="card-category">Nombre de canditat(s)</p>
                                    <figure style="width: 100px;height: 100px;background: #ffa50069; padding: 15px; display:inline-block; margin:20px;border-radius:50px;"><i class="nc-icon nc-circle-09" style="font-size: 70px;"></i> </figure>
                                  
									<h4 class="card-title text-center">10 candidat(s)</h4>
                                </div>
                                <div class="card-body " style="display: inline-block">
							<hr>
							<div class="stats">
							<i class="fa fa-history"></i>Il y a 10 min.
							</div>
								</div>
						</div>
					</div>
				</div>
				*/?>
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Métier Statistiques</h4>
                                    <p class="card-category">Statistiques relative aux différents métiers</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Police
                                        <i class="fa fa-circle text-danger"></i> Pompier
                                        <i class="fa fa-circle text-warning"></i> SAMU
										<i class="fa fa-circle text-success"></i> Civil
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
                      <?php /*<div class="col-md-8">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Comportement des utilisateurs</h4>
                                    <p class="card-category">24 Hours performance</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartHours" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">2017 Sales</h4>
                                    <p class="card-category">All products including Taxes</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartActivity" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card  card-tasks">
                                <div class="card-header ">
                                    <h4 class="card-title">Tasks</h4>
                                    <p class="card-category">Backend development</p>
                                </div>
                                <div class="card-body ">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" value="">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" value="">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Read "Following makes Medium better"</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" value="" disabled>
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Unfollow 5 enemies from twitter</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> */ ?>
                </div>
				</div>
			</div>
	 <?php include 'inc/footer2.php'; ?>
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
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script  type="text/javascript"  src="assets/js/demo.php"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        //demo.showNotification();
		
/*$.each($('#navi').find('li'), function() {
			$(this).toggleClass('active', 
				window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
			}); 

			*/
		
    });
	

</script>
<?php
} else {
  if ($recruteur){
	header('Location: typography.php');
	exit();
  } else {
	header('Location: ../404.php');
	exit();
	}
} 
}else {
  header ('Location: inc/loginpage.php');
  exit();
}
?>
</html>

