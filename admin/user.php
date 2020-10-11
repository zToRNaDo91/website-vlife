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
    <title>Effectif</title>
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
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
	<link href="assets/css/user.css" rel="stylesheet" />
	
</head>

<body>
		<?php include 'inc/header3.php'; ?>
            <div class="content">
                <div class="container-fluid">
                   
					<div class="row">
					 
                        <div class="col-md-6">
                            <div class="card">
							<div style="display:inline-block">
					
						<form method="post" action="" id="contactForm">
						<h4 class="text-right" id="closeform">Fermer formulaire
					 <label class="switch" style="top: 10px"for="checkbox">
					<input type="checkbox" id="checkbox" name="checkbox" value="1" />
					<div class="slider round"></div>
				  </label>
				  </h4>
				  </form>
				  <div class="result"></div>
				  
					</div>
                                <div class="card-header" style="display:inline-block">
                                    <div class="card-title">
									<b style="font-size:150%">Ajouter Staff</b>
									<button type="button" class ="btn btn-info btn-fill pull-right"  data-toggle="modal" data-target="#AddData" data-whatever="@getbootstrap"><i class="nc-icon nc-simple-add"></i> Ajout</button>
									</div>
								
									<hr>
                                </div>
                                <div class="card-body">
								   <div class="card-body table-full-width table-responsive">
                                   
									<?php
									include '../inc/connect.php';
									$requete = mysqli_query($mysqli, 'SELECT *	FROM staff
									ORDER BY numero ASC');
									?>
									<table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Identity</th>
											<th>Role</th>
                                            <th>Action</th>
                                        </thead>
										 <tbody>
										<?php
										while ($ligne = $requete->fetch_assoc()):
										?>
                                       
                                            <tr>
                                                <td><?php echo $ligne['numero'];?></td>
                                                <td><?php echo $ligne['nom'];?></td>
                                                 <td><?php echo $ligne['discord_id'];?></td>
												<td><?php echo $ligne['role'];?></td>
                                                <td>  
												<button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-link"  data-toggle="modal" data-target="#UpdateData" data-id = "<?php echo $ligne['numero']?>" data-discord ="<?php echo $ligne['discord_id']; ?>" data-whatever="<?php echo $ligne['nom'];?>" data-original-title="Editer">
													<i class="fa fa-edit"></i>
                                                </button>
                                                <a type="button" rel="tooltip" title="" href="inc/delete_staff.php?id=<?php echo $ligne['numero']?>"  onclick="return confirm('Êtes vous sûr de vouloir supprimer ce staff ?')" class="btn btn-danger btn-simple btn-link" data-original-title="Supprimer">
                                                    <i class="fa fa-times"></i>
                                                </a>
												</td>
                                            </tr>
                                       
										<?php
										endwhile;

									?>
									 </tbody>
                                    </table>
									</div>
									
								</div>
                    </div>
                </div>
            </div>
			</div>
			</div>
			<?php include 'inc/footer2.php'; ?>
        </div>
    </div>
						<div class="modal fade" id="AddData" tabindex="-1" role="dialog" aria-labelledby="AddDataLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<h5 class="modal-title" id="AddDataLabel">Ajout Staff</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">&times;</span>
											</button>
										  </div>
										  <div class="modal-body">
											<form method="post" enctype="multipart/form-data">
											  <div class="form-group">
												<label for="recipient-name" class="col-form-label">Nom:</label>
												<input type="text" class="form-control" name="nom" id="nom" required>
											  </div>
											  <div class="form-group">
												<label for="message-text" class="col-form-label">Discord ID:</label>
												<input type="text" class="form-control" name="discord" id="discord" required>
											  </div>
											  <div class="form-group">
												  <label for="role" class="col-form-label">Role:</label>
												  <select class="form-control" name="rol" id="rol" required>
												  <option value="Admin">Admin</option>
												  <option value="Recruteur">Recruteur</option>
												  </select>
											  </div>
										      </div>
											  
										  <div class="modal-footer">
											<button type="button" class="btn btn-secondary  btn-fill" data-dismiss="modal">Fermer</button>
											<button type="submit" name="submit1" class="btn btn-primary  btn-fill">Ajouter</button>
										  </div>
										  </form>
										</div>
									  </div>
						</div>
						<div class="modal fade" id="UpdateData" tabindex="-1" role="dialog" aria-labelledby="UpdateData" aria-hidden="true">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<h5 class="modal-title" id="UpdateData1">Edit Staff</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">&times;</span>
											</button>
										  </div>
										  <div class="modal-body">
											<form method="post" enctype="multipart/form-data">
											  
											   <div class="form-group">
												<input type="hidden" class="form-control" name="id2" id="id">
											  </div>
											  <div class="form-group">
												<label for="recipient-name" class="col-form-label">Nom:</label>
												<input type="text" class="form-control" name="nom" id="nom2" required>
											  </div>
											  <div class="form-group">
												<label for="message-text" class="col-form-label">Discord ID:</label>
												<input type="text" class="form-control" name="discord" id="discord2" required>
											  </div>
											  <div class="form-group">
												  <label for="role" class="col-form-label">Role:</label>
												  <select class="form-control" name="rol" id="rol" required>
												  <option value="Admin">Admin</option>
												  <option value="Recruteur">Recruteur</option>
												  </select>
											  </div>
										      </div>
											  
										  <div class="modal-footer">
											<button type="button" class="btn btn-secondary  btn-fill" data-dismiss="modal">Fermer</button>
											<button type="submit" name="submit2" class="btn btn-primary  btn-fill">Editer</button>
										  </div>
										  </form>
										</div>
									  </div>
						</div>
</body>
<!--   Core JS Files   -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
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
<?php

	#Ajout Staff
		 if (isset($_POST['submit1'])) {
		 $nom = $mysqli->real_escape_string($_POST['nom']);
		 $discord = $mysqli->real_escape_string($_POST['discord']);
		 $role = $mysqli->real_escape_string($_POST['rol']);
		 $requete="INSERT INTO staff (`numero`,`nom`, `discord_id`, `role`)  VALUES(NULL,'".$nom."','".$discord."','".$role."')";
		 
		$result1 = $mysqli->query($requete);
		if ($result1) {
echo '<script language="Javascript">
<!--
document.location.replace("user.php");
// -->
</script>';
            }else{
                echo "Erreur" . mysqli_error($mysqli);} 
}

#Edit Staff
 if (isset($_POST['submit2'])) {
 $id = $mysqli->real_escape_string($_POST['id2']);
$nom = $mysqli->real_escape_string($_POST['nom']);
$discord = $mysqli->real_escape_string($_POST['discord']);
$role = $mysqli->real_escape_string($_POST['rol']);
$requete2 = "UPDATE staff SET nom='".$nom."', discord_id='".$discord."', role='".$role."'  WHERE numero='".$id."' "; 
 
$result2 = $mysqli->query($requete2);
if ($result2) {

			echo '<script language="Javascript">
<!--
document.location.replace("user.php");
// -->
</script>';
            }else{
                echo "Erreur" . mysqli_error($mysqli);} 
}


#Fermer/ouvrir Formulaire
$result = mysqli_query($mysqli,"SELECT `name` FROM `category` WHERE id='6'"); 
$row = mysqli_fetch_assoc($result);
$form = $row['name'];
if ($form=='1') {
$msg = 'yes'; } 
else { $msg = 'no';}
mysqli_close($mysqli);

?>
<script type="text/javascript">


	$('#UpdateData').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  var discord_id = button.data ('discord')
  var id = button.data ('id')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Editer ' + recipient)
  modal.find('.modal-body #nom2').val(recipient)
  modal.find('.modal-body #discord2').val(discord_id)
  modal.find('.modal-body #id').val(id)
})
	
    $(document).ready(function() {
	var msg = '<?php echo $msg;?>';
	var a = document.getElementById('checkbox'); 
	if (msg == 'yes') {
	a.setAttribute("checked", "");
	a.setAttribute("value", "0");
	}
		
			$.each($('#navi').find('li'), function() {
			$(this).toggleClass('active', 
				window.location.pathname.indexOf($(this).find('a').attr('href')) > - 1);
			}); 

			
	

	
		  $(document).ready(function () {
			$('#checkbox').click(function (e) {
			  
			  var checkbox = $('#checkbox').val();
			  $.ajax
				({
				  type: "POST",
				  url: "inc/form_submit.php",
				  data: { "checkbox": checkbox },
				  success: function (data) {
					$('.result').html(data);
					document.location.reload(true);
					//return false;
					//$('#checkbox').setAttribute("checked", "");
					//$('#contactForm')[0].reset();
				  }
				});
			});
		  });

	
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
