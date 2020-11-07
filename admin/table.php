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
    <title>Candidatures</title>
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
	<link href="assets/css/table.css" rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	
   
	
	</head>

<body>

<?php 
include 'inc/header3.php';
include '../inc/connect.php';
		$count = mysqli_query($mysqli, 'SELECT discord, count(*) as duplicate
		FROM info
		GROUP BY discord');
		$requete = mysqli_query($mysqli, 'SELECT numero,discord, poste, username, email, age, category.name, date, recruteur.numero2, oral
		FROM info
		LEFT JOIN category ON info.category_id=category.id 
		LEFT JOIN recruteur ON info.numero=numero2
		WHERE category_id=category.id
		ORDER BY numero DESC');
		$requete1 = mysqli_query($mysqli,'SELECT numero,discord, poste, username, email, age, category.name, date, recruteur.numero2, oral
		FROM info
		LEFT JOIN category ON info.category_id=category.id
		LEFT JOIN recruteur ON info.numero=numero2
		WHERE category.name="En Attente" or category.name="Verrouillée"
		ORDER BY numero DESC');
		$requete2 = mysqli_query($mysqli,'SELECT numero,discord, poste, username, email, age, category.name, date, recruteur.numero2, oral
		FROM info
		LEFT JOIN category ON info.category_id=category.id
		LEFT JOIN recruteur ON info.numero=numero2
		WHERE category.name="Accepter" 
		ORDER BY numero DESC');
		$requete3 = mysqli_query($mysqli,'SELECT numero,discord, poste, username, email, age, category.name, date, recruteur.numero2, oral
		FROM info
		LEFT JOIN category ON info.category_id=category.id
		LEFT JOIN recruteur ON info.numero=numero2
		WHERE category.name="Refuser" or category.name="Banni" 
		ORDER BY numero DESC');
		$nb = mysqli_num_rows($requete);
		$nb1 = mysqli_num_rows($requete1);
		$nb2 = mysqli_num_rows($requete2);
		$nb3 = mysqli_num_rows($requete3);
		
?>
            <div class="content">
                <div class="container-fluid">
					
        <div class="panel panel-primary filterable">

		<div class="panel-header">
		<ul class="nav nav-tabs faq-cat-tabs">
                <li><a href="#1" data-toggle="tab" class="moving-tab" onclick="showt(1), hidet(2); hidet(4); hidet(3)">Tout Afficher <span class="badge"><?php echo $nb; ?></span></a></li>
                <li><a href="#2" data-toggle="tab" class="moving-tab" onclick="showt(2); hidet(1); hidet(4); hidet(3)">En Attente <span class="badge"><?php echo $nb1; ?></span></a></li>
				<li><a href="#3" data-toggle="tab" class="moving-tab" onclick="showt(3); hidet(1); hidet(4); hidet(2);">Accepter <span class="badge"><?php echo $nb2; ?></span></a></li>
                <li><a href="#4" data-toggle="tab" class="moving-tab" onclick="showt(4); hidet(1); hidet(3); hidet(2);">Refuser <span class="badge"><?php echo $nb3; ?></span></a></li>
        </ul>
		</div>
		 <div class="tab-pane active in" aria-expanded="true" id="1" style="display:block">
		<div class = "table-responsive">
		<table class="example table table-hover">
				<thead>
				<tr>
					<th>#</th>
                    <th>Poste</th>
                    <th>Discord_ID</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Âge</th>
					<th>Status</th>
					<th>Oral</th>
					<th>Reception</th>
					<th><b>Actions</b></th>
                </tr>
				</thead>
				<?php
				      while ($ligne = $requete->fetch_assoc()):
		$date_est = $ligne ['date'];
		$date = date("d/m/Y", strtotime($date_est));
		mysqli_query($mysqli,'DELETE FROM info
		WHERE DATEDIFF(CURDATE(), date) > 1095' );
		mysqli_query($mysqli,'DELETE FROM recruteur
		WHERE DATEDIFF(CURDATE(), date2) > 1095' );
				?>
				
				<tr>
                    <?php $oral = $ligne['oral'];
					if ($oral == 'Accepter'){$oral = '<i class="fa fa-thumbs-up" aria-hidden="true"></i>';} 
					elseif ($oral =='Refuser') { $oral = '<i class="fa fa-thumbs-down" aria-hidden="true"></i>';}
					else {$oral = '<small><i>N/A</i></small>';}
					?>
					<th><?php echo "$",$ligne['numero'];?></th>
					<th><?php echo $ligne['poste'];?></th>
                    <th><?php echo $ligne['discord'];?></th>
                    <th><?php echo $ligne['username'];?></th>
                    <th><?php echo $ligne['email'];?></th>
                    <th><?php echo $ligne ['age'].' ans';?></th>
					<th><?php echo $ligne ['name'];?></th>
					<th><?php echo $oral;?></th>
					<th><?php echo $date;?></th>
					<td><a class="btn btn-primary a-btn-slide-text" href="details.php?discord=<?=$ligne['discord']?>&number=<?=$ligne['numero']?>"><i class="fa fa-edit" aria-hidden="true"></i>
        <span><strong>Gérer</strong></span></a>
		<?php if($admin){ ?><a class="btn btn-danger a-btn-slide-text" href="inc/delete_candid.php?id=<?php echo $ligne['numero']?>"  onclick="return confirm('Êtes vous sûr de vouloir supprimer cette candidature ?')"><i class="fa fa-times" aria-hidden="true"></i>
        <span><strong>Delete</strong></span></a><?php } ?>
		</td>
                </tr>
		
		<?php
		endwhile;

		?>
			</table>
		</div>
		</div>
		 <div class="tab-pane fade" id="2" style="display:none">
		<div class = "table-responsive">
		<table class="example table table-hover">
				<thead>
				<tr>
					<th>#</th>
                    <th >Poste</th>
                    <th>Discord_ID</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Âge</th>
					<th>Status</th>
					<th>Oral</th>
					<th>Reception</th>
					<th><b>Actions</b></th>
                </tr>
				</thead>
				<?php
				      while ($ligne = $requete1->fetch_assoc()):
		$date_est = $ligne ['date'];
		$date = date("d/m/Y", strtotime($date_est));
				?>
				
				<tr>
                    <?php $oral = $ligne['oral'];
					if ($oral == 'Accepter'){$oral = '<i class="fa fa-thumbs-up" aria-hidden="true"></i>';} 
					elseif ($oral =='Refuser') { $oral = '<i class="fa fa-thumbs-down" aria-hidden="true"></i>';}
					else {$oral = '<small><i>N/A</i></small>';}
					?>
					<th><?php echo "$",$ligne['numero'];?></th>
					<th><?php echo $ligne['poste'];?></th>
                    <th><?php echo $ligne['discord'];?></th>
                    <th><?php echo $ligne['username'];?></th>
                    <th><?php echo $ligne['email'];?></th>
                    <th><?php echo $ligne ['age'].' ans';?></th>
					<th><?php echo $ligne ['name'];?></th>
					<th><?php echo $oral;?></th>
					<th><?php echo $date;?></th>
					<td><a class="btn btn-primary a-btn-slide-text" href="details.php?discord=<?=$ligne['discord']?>&number=<?=$ligne['numero']?>"><i class="fa fa-edit" aria-hidden="true"></i>
        <span><strong>Gérer</strong></span></a>
		<?php if($admin){ ?><a class="btn btn-danger a-btn-slide-text" href="inc/delete_candid.php?id=<?php echo $ligne['numero']?>"  onclick="return confirm('Êtes vous sûr de vouloir supprimer cette candidature ?')"><i class="fa fa-times" aria-hidden="true"></i>
        <span><strong>Delete</strong></span></a><?php } ?>
		</td>
                </tr>
		
		<?php
		endwhile;

		?>
			</table>
		</div>
		</div>	 <div class="tab-pane fade" id="3" style="display:none">
		<div class = "table-responsive">
		<table class="example table table-hover">
				<thead>
				<tr>
					<th>#</th>
                    <th >Poste</th>
                    <th>Discord_ID</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Âge</th>
					<th>Status</th>
					<th>Oral</th>
					<th>Reception</th>
					<th><b>Actions</b></th>
                </tr>
				</thead>
				<?php
				      while ($ligne = $requete2->fetch_assoc()):
		$date_est = $ligne ['date'];
		$date = date("d/m/Y", strtotime($date_est));
				?>
				
				<tr>
					<?php $oral = $ligne['oral'];
					if ($oral == 'Accepter'){$oral = '<i class="fa fa-thumbs-up" aria-hidden="true"></i>';} 
					elseif ($oral =='Refuser') { $oral = '<i class="fa fa-thumbs-down" aria-hidden="true"></i>';}
					else {$oral = '<small><i>N/A</i></small>';}
					?>
					<th><?php echo "$",$ligne['numero'];?></th>
					<th><?php echo $ligne['poste'];?></th>
                    <th><?php echo $ligne['discord'];?></th>
                    <th><?php echo $ligne['username'];?></th>
                    <th><?php echo $ligne['email'];?></th>
                    <th><?php echo $ligne ['age'].' ans';?></th>
					<th><?php echo $ligne ['name'];?></th>
					<th><?php echo $oral;?></th>
					<th><?php echo $date;?></th>
					<td><a class="btn btn-primary a-btn-slide-text" href="details.php?discord=<?=$ligne['discord']?>&number=<?=$ligne['numero']?>"><i class="fa fa-edit" aria-hidden="true"></i>
        <span><strong>Gérer</strong></span></a>
		<?php if($admin){ ?><a class="btn btn-danger a-btn-slide-text" href="inc/delete_candid.php?id=<?php echo $ligne['numero']?>"  onclick="return confirm('Êtes vous sûr de vouloir supprimer cette candidature ?')"><i class="fa fa-times" aria-hidden="true"></i>
        <span><strong>Delete</strong></span></a><?php } ?>
		</td>
                </tr>
		
		<?php
		endwhile;

		?>
			</table>
		</div>
			</div> 
		<div class="tab-pane fade" id="4" style="display:none">
		<div class = "table-responsive">
		<table class="example table table-hover">
				<thead>
				<tr>
					<th>#</th>
                    <th >Poste</th>
                    <th>Discord_ID</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Âge</th>
					<th>Status</th>
					<th>Oral</th>
					<th>Reception</th>
					<th><b>Actions</b></th>
                </tr>
				</thead>
				<?php
				      while ($ligne = $requete3->fetch_assoc()):
		$date_est = $ligne ['date'];
		$date = date("d/m/Y", strtotime($date_est));
				?>
				
				<tr>
                    <?php $oral = $ligne['oral'];
					if ($oral == 'Accepter'){$oral = '<i class="fa fa-thumbs-up" aria-hidden="true"></i>';} 
					elseif ($oral =='Refuser') { $oral = '<i class="fa fa-thumbs-down" aria-hidden="true"></i>';}
					else {$oral = '<small><i>N/A</i></small>';}
					?>
					<th><?php echo "$",$ligne['numero'];?></th>
					<th><?php echo $ligne['poste'];?></th>
                    <th><?php echo $ligne['discord'];?></th>
                    <th><?php echo $ligne['username'];?></th>
                    <th><?php echo $ligne['email'];?></th>
                    <th><?php echo $ligne ['age'].' ans';?></th>
					<th><?php echo $ligne ['name'];?></th>
					<th><?php echo $oral;?></th>
					<th><?php echo $date;?></th>
					<td><a class="btn btn-primary a-btn-slide-text" href="details.php?discord=<?=$ligne['discord']?>&number=<?=$ligne['numero']?>"><i class="fa fa-edit" aria-hidden="true"></i>
        <span><strong>Gérer</strong></span></a>
		<?php if($admin){ ?><a class="btn btn-danger a-btn-slide-text" href="inc/delete_candid.php?id=<?php echo $ligne['numero']?>"  onclick="return confirm('Êtes vous sûr de vouloir supprimer cette candidature ?')"><i class="fa fa-times" aria-hidden="true"></i>
        <span><strong>Delete</strong></span></a><?php } ?>
		</td>
                </tr>
		
		<?php
		endwhile;
		mysqli_close($mysqli);
		?>
			</table>
		</div>
		</div>	
		</div>
		 <div class="panel-foot"></div>
                    </div>
                </div>
			<?php include 'inc/footer2.php';?>
        </div>
    </div>
   
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
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
$.each($('#navi').find('li'), function() {
			$(this).toggleClass('active', 
				window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
			}); 
});
</script>
<script type="text/javascript">

 'use strict';
$(document).ready(function() {
       
           $('.example').DataTable( {
                "paging":   true,
                "ordering": true,
				"searching": true,
                "info":     false,
				"order": [[ 0, "desc" ]],
				 "language": {
				"emptyTable":     "Pas de données disponible.",
				"info":           "Showing _START_ to _END_ of _TOTAL_ entries",
				"lengthMenu": "<b>Montrer _MENU_ candidatures</b>",
				"zeroRecords": "Aucun résultat trouver",
				"info": "Montre _PAGE_ of _PAGES_",
				"loadingRecords": "Loading...",
				"processing":     "Processing...",
				"infoEmpty": "La table est vide",
				"infoFiltered": "(filtered from _MAX_ total records)",
				"sSearch": "<b>Recherche : </b>",
				"paginate": {
					"first":      "Premier",
					"last":       "Dernier",
					"next":       "Suivant",
					"previous":   "Précédent"
				},
				 "aria": {
					"sortAscending":  ": activer pour ranger les colonnes de façon ascendante",
					"sortDescending": ":  activer pour ranger les colonnes de façon descendante"
				}
				}
            } );

});
function hidet(id_div)
    {

    if (document.getElementById(id_div).style.display=='block')
        {
        document.getElementById(id_div).style.display='none'
        }  
    }

function showt(id_div)
    {

    if (document.getElementById(id_div).style.display=='none')
        {
        document.getElementById(id_div).style.display='block'
        }  
    }

</script>
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
