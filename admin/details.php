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
	<link href="assets/css/details.css" rel="stylesheet" />
	<link href="assets/boxicons/css/boxicons.min.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<style>
.fa {
	width:-1px;
	font-size: 20px;
	text-align: center;
	bottom: 5px;
	position: relative;
}
.toggle {
  background-color: #ddddde;
  border-radius: 60px;  
  box-shadow: 0 1px 1px 0 rgba(255,255,255,.4), 0 1px 0 0 rgba(0,0,0,0.10) inset;
  cursor: pointer;
  width: 90px;
  height: 50px;
  overflow: hidden;
  position: relative;
  top: 5px;
  right:5px;
  transition: all .25s linear;
  float:right;
}
.toggle .slide {
  color: #818283;
  color: rgba(0,0,0,.15);
  background: #efefef;
  border-radius: 50%;
  font-size: 30px;
  line-height: 34px;
  text-align: center;
  text-decoration: none;
  height: 33px;
  width: 33px;
  position: absolute;
  top: 7px;
  left: 7px;
  box-shadow: 0 1px 2px 0 rgba(0,0,0,0.15), 0 1px 1px 0 rgba(255,255,255,.8) inset;
  transition: all 0.3s cubic-bezier(0.43, 1.3, 0.86, 1);
}
.toggle .slide span{
    text-shadow: 0 1px 1px rgba(255,255,255,.7), 0 0 1px rgba(0,0,0,.3);       
}
.toggle .slide:before, 
.toggle .slide:after {
  color: #FFF;
  content: "\f023";
  font-family: fontAwesome;
  font-size: 34px;
  font-weight: 400;
  text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.25);
  -webkit-font-smoothing: antialiased;
  position: absolute;
}
.toggle .slide:before {
  right: -30px;
  color: #2a2b2c;
  opacity: 0.2;
}
.toggle .slide:after {
  content: "\f09c";
  left: -40px;
  color: #00ba00;
}
.toggle.on {
  background: #00dc00;
}
.toggle.on .slide {
  left: 50px;
  color: #00d100;
}
.low {
	position: relative;
	top: 40px;
}
	</style>
</head>
<body>
<?php
	 include 'inc/header3.php';
	include '../inc/connect.php';
   $result = mysqli_query($mysqli,"SELECT numero,age,verrouiller,name,raison,prenom,passion,email,username,discord,date,micro,gta,conge,travail,absent,dispo,poste,XP,RP,qual,metier,met,avatar,category_id,motive,autre,validation,scenario
   FROM info 
   LEFT JOIN category ON info.category_id=category.id 
   WHERE numero = '".$_GET['number']."' AND category_id=category.id 
   ORDER BY `numero` DESC"); // Selectionner un par un les données. 
   $result2 = mysqli_query($mysqli," SELECT number, date_traitement,traitement,numero2,admin, recrutoral, raison_oral, date_recrutoral, oral,comment, commentaire from info LEFT JOIN recruteur ON info.numero= recruteur.numero2 WHERE numero = '".$_GET['number']."'");
	$count = mysqli_query($mysqli, "SELECT discord, count(*) as duplicate
		FROM info WHERE discord = '".$_GET['discord']."'
		GROUP BY discord
		"); // Remplacer "name" par l'id steam recuperer
   $row = mysqli_fetch_assoc($result);
   $row2 = mysqli_fetch_assoc($count);
   $row3 = mysqli_fetch_assoc($result2);
   $date_est = $row ['date'];
   $date = date("d/m/Y à H:i:s", strtotime($date_est));
    $date_est2 = $row3 ['date_traitement'];
   $date_traitement = date("d/m/Y à H:i:s", strtotime($date_est2));
   $date_est3 = $row3 ['date_recrutoral'];
   $date_traitement2 = date("d/m/Y à H:i:s", strtotime($date_est3));
   $catego = $row['category_id'];	
     if (!empty ($row4['bulletin'])) {
   $bulletin = $row4['bulletin'] ;
   } else {
   $bulletin = "error.pdf";
   }
   ?>
 <title>Candidature de <?php echo $row['username'] ?></title>
 <div class="content">
 <div class="container-fluid">
<div class="row-fluid fluide">
			
			
				<br>
				
				<div class="well-responsive well-lg" >
				
				
<?php

		function call_data($url) {	
		$ch = curl_init();

		// Définition de l'URL et autres options appropriées
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, false);

		// Récupération de l'URL et passage au navigateur^
		$result = curl_exec($ch);

		// Fermeture de la ressource cURL et libération des ressources systèmes
		curl_close($ch);
		return $result;
		}
		function DateAgeFR($DateNaissance)
		{
		$DateNaissance = explode("/", $DateNaissance);
		$Date = explode("/", date("d/m/Y"));
       
		if (($DateNaissance[1] <= $Date[1]) && ($DateNaissance[0] <= $Date[0])) $Age = $Date[2] - $DateNaissance[2];
		else $Age = $Date[2] - $DateNaissance[2] /*- 1*/;
		return $Age;
		}
	if ($row['category_id'] == '1' or $row['category_id'] == '7') {
				echo '<div class="toggle">
			   <div class="slide">
			   <form method="post" action="">
				 <input type="checkbox" id="checkbox" style="display:none" id="checkbox" value="1" name="checkbox" />
			   </form>
				 <span class="fa fa-circle-o"></span>
			  </div>
			</div>
			 <div class="result"></div>';
			 }
	echo '<br><div class="header low"></div> <br>';
	if (!empty($row['avatar'])) {
	$link = 'https://cdn.discordapp.com/avatars/'. $row['discord'] .'/'. $row['avatar'] .'.png?size=128';
	} else {
	$link = 'https://discord.com/assets/6debd47ed13483642cf09e832ed0bc1b.png';
	}
	echo '<center><h3>Candidature #'.$row['numero'].'</h3> <h3>Par : <img onerror="this.onerror=null; this.src=\'https://discord.com/assets/6debd47ed13483642cf09e832ed0bc1b.png\'" class="img-rounded" src="'.$link.'" width ="50"> '.$row['username'].'</h3></center><br>';
	echo '<div class="header"></div> <br>';
	echo '<div class="centre">';
	echo 'Poste : <br> '.$row['poste'].'<div class ="hr"></div><br>';
	echo 'Pseudo Discord : <br> '.$row['username'].'<div class ="hr"></div><br>';
	echo 'DISCORD_ID :<br> '.$row['discord'].'<div class ="hr"></div><br>';
	echo 'Prénom :<br> '.$row['prenom'].'<div class ="hr"></div><br>';
	echo 'Email : <br>'.$row['email'].'<div class ="hr"></div><br>';
	echo 'Âge : <br>'.$row['age'].' ans<div class ="hr"></div><br><br>';
	echo 'Passion(s) : <br>';
	$passion = $row['passion'];
	$nbpass = strlen($passion);
	if ($nbpass <= 32 ) {
	echo $passion,'<div class ="hr"></div><br>';
	}
	else {
	 echo '<div readonly class="form-control-plaintext data">'.$passion.'</div><br><br>';
	}
	echo "Travail dans un service pro ? <span style='background-color:yellow;'>".$row['metier'].'</span><br>';
	echo "Service et période d'activité : ";
	$time = $row['met'];
    $numb = strlen($time);
	if (!empty ($time)) {
	   if ($numb >= 32 ) {
	    echo '<br><div readonly class="form-control-plaintext data">'.$time.'</div>';
	    } else {
	       echo '<br> '. $time. '<div class ="hr"></div> <br>';
	        
	    }
	   }
	   else {
	   echo '<i>N/A</i> <br>';
	}
	
	
	echo "En posession d'un micro ? <span style='background-color:yellow;'>".$row['micro']."</span><br>";
	echo "En possession de GTA V sur PC ? <span style='background-color:yellow;'>".$row['gta']."</span><br><br><br>";
	
	echo 'Disponibilités en période congé/vacance :<br>';
	$conge = $row['conge'];
	$nbconge = strlen($conge);
	if ($nbconge <= 32 ) {
	echo $conge,'<div class ="hr"></div><br>';
	}
	else {
	 echo '<div readonly class="form-control-plaintext data">'.$conge.'</div><br>';
	}
	echo 'Disponibilités en période scolaire/travail :<br>';
	$travail = $row['travail'];
	$nbtravail = strlen($travail);
	if ($nbtravail <= 32 ) {
	echo $travail,'<div class ="hr"></div><br>';
	}
	else {
	 echo '<div readonly class="form-control-plaintext data">'.$travail.'</div><br>';
	}
	echo 'Impératifs pouvant occassioné un retard ou une absence :<br>';
	$absent = $row['absent'];
	$nbabsent = strlen($absent);
	if ($nbabsent <= 32 ) {
	echo $absent,'<div class ="hr"></div><br>';
	}
	else {
	 echo '<div readonly class="form-control-plaintext data">'.$absent.'</div><br>';
	}
	echo 'Disponibilité de 21h jusqu\'à minuit:<br>';
	$dispo = $row['dispo'];
	$nbdispo = strlen($dispo);
	if ($nbdispo <= 32 ) {
	echo $dispo,'<div class ="hr"></div><br><br>';
	}
	else {
	 echo '<div readonly class="form-control-plaintext data">'.$dispo.'</div><br><br>';
	}
	
	echo "Experience Rôleplay :";
	$xp = $row['XP'];
	$xp = str_replace ('"', '', $xp);
	echo '<div readonly class="form-control-plaintext data">'.$xp.'</div><br><br>';
	echo "Gameplay joué :<br>";
	$gameplay = $row['RP'];
	$gameplay = str_replace ('"', '', $gameplay);
	echo '<div readonly class="form-control-plaintext data">'.$gameplay.'</div><br><br>';
	echo "Qualité nécessaire au poste :<br>";
	$qualite = $row['qual'];
	$qualite = str_replace ('"', '', $qualite);
	echo '<div readonly class="form-control-plaintext data">'.$qualite.'</div><br><br>';
	$motivation = $row['motive'];
	$motivation = str_replace ('"', '', $motivation);
	if (!empty($motivation)){
	echo "Motivation pour nous rejoindre :";
	echo '<div readonly class="form-control-plaintext data">'.$motivation.'</div><br><br>';
	}
	echo "Scénario RP quotidienne en tant que civil, pour les secours : <br>";
    $scenario = $row['scenario'];
	$scenario = str_replace ('"', '', $scenario);
	echo '<div readonly class="form-control-plaintext data">'.$scenario.'</div><br><br>';
	
	
	echo "Autre :";
	$autre = $row['autre'];
	if (!empty ($autre)) {
	$autre = str_replace ('"', '', $autre);
	echo '<br><div readonly class="form-control-plaintext data">'.$autre.'</div><br><br>';
	}else{ echo '<br> <i>N/A</i> <br><br>';}
	
	$validation = $row['validation'];
	if (!empty ($autre)) {
	echo '<div class="custom-control custom-checkbox mb-3">
		<input type="checkbox" name ="validation" class="custom-control-input" id="validation" value="valide" disabled checked>
		<label class="custom-control-label" for="validation">Le candidat à accepter les conditions d\'utilisation de ses données et confirme avoir 15 ans ou plus.</label>
		<div class="invalid-feedback">Merci de cocher.</div>
		</div>';
	}
	echo '<br>Nombre de candidature(s): <span style="background-color:yellow;">'.$row2['duplicate'].'</span><br>' ;
	echo "Soumis le $date<br>";
	
	echo '</div> <br>';
	echo '<div class="header"></div> <br>';
	$verrouiller = $row ['verrouiller'];
		if ( !empty($verrouiller)) {
		if ($catego =='7') {
		echo 'Candidature verrouillée par : '. $verrouiller. '<br>' ;
		} elseif ($catego =='1') {
		echo 'Candidature déverrouillée par : '. $verrouiller ;
		}
		}
	if ($row['category_id'] != 1) {
		if ($row3['traitement'] != '') {
			echo '<br>Status : '.$row['name'].'   à l\'écrit<br> Traité par : '.$row3['traitement'].'<br> En date du : '.$date_traitement.'<br> ';
			if ($row['raison'] != '' and $row['category_id'] != 2) {
			echo 'Raison: '.$row['raison'].'<br>';
			}
			if ($row3['comment'] != '') {
				$comment = $row3['comment'];
				echo 'Commentaire :<br> <div  readonly class="data" >'.$comment.'</div>';
			}
		}
		if ($row3['admin'] != '') {
			echo '<br>Modifier par Admin '.$row3['admin'].' <br>';
		}
		
		if ($row3['oral'] != '') {
		$commentaire = $row3['commentaire'];
			echo '<br>Résultat entretien oral :  '.$row3['oral'].' <br>';
			if ($row3['raison_oral'] != '') {
			echo 'Pour la raison suivante :  '.$row3['raison_oral'].' <br>';
			}
			echo 'Date de traitement oral :  '.$date_traitement2.' <br>';
			echo 'Entretien oral fait par  :  '.$row3['recrutoral'].' <br>';
			echo 'Commentaire :<br> <div  readonly class="data" >'.$commentaire.'</div>';
			
		}

		
		if ($admin) {
		
		include 'inc/formadmin.php';
		if ($row['category_id'] == '2' and $row3['commentaire'] == '') {
		include 'inc/formoral.php';
		}
			if ($row['category_id'] == '2' and $row3['commentaire'] != '') { ?>
		<form method="post" style="margin-top:100px;" class="needs-validation" novalidate>
		<fieldset>
		<legend> Partie orale </legend>   
		<label> Commentaire : </label><br><textarea  class="form-control" maxlength ="300" name = "commentaire" style="resize:none;width: 370px;" required><?php if ($row3['commentaire'] != '' ) {echo $row3['commentaire'];}?></textarea>
		<div class="invalid-feedback">
        Merci d'écrire un commentaire.
		</div>				
					 
				<input type="submit" class="btn btn-info btn-fill"   name="submit3" value="Valider" style="margin-top: 10px;">
		</fieldset>
		</form>
		
		<?php
		}
		
		} else{
		/*
		<form method="post" class="needs-validation" novalidate>
		<fieldset>
		<legend> Réponse Recruteur </legend>   
		
		<div class="custom-control custom-checkbox mb-3">
		<input type="checkbox" class="custom-control-input" id="time" value = "time" name="choice" required>
		<label class="custom-control-label" for="time"> Supprimer temps d'attente </label> 
		<i class="bx bx-help-circle icon-help" data-placement="bottom" title="Redonne l'accès au formulaire"></i>
		</div>
		<input type="submit"  class="btn btn-info btn-fill" style="float:left" name="submit" value="Valider" style="margin-top: 10px;">
		
		</fieldset>
		</form>
		*/
		 if ($row['category_id'] == '2' and $row3['oral'] == '') {
		include 'inc/formoral.php';

		}
		if ($row['category_id'] == '2' and $row3['commentaire'] != '') {?>
		<form method="post" style="margin-top:30px;" class="needs-validation" novalidate>
		<fieldset>
		<legend> Partie orale </legend>   
		<label> Commentaire : </label><br><textarea  class="form-control" maxlength ="300" name = "commentaire" style="resize:none;width: 370px;" required><?php if ($row3['commentaire'] != '' ) {echo $row3['commentaire'];}?></textarea>
		<div class="invalid-feedback">
        Merci d'écrire un commentaire.
      </div>					
					 
				<input type="submit" class="btn btn-info btn-fill"   name="submit3" value="Valider" style="margin-top: 10px;">
		</fieldset>
		</form>
		
		<?php
		}
			//echo "Vous n'êtes pas admin";
			}
	} else { 
		
		include 'inc/formrecru.php';
		
		?>

	<?php }  ?>
	<div class="text-center"style="margin-top:<?php if ($row['category_id'] == '2' and $row3['oral'] == '') { echo '350px';} else if($row['category_id'] == '2' and ($admin)){echo '350px';} else { echo '280px';}?>;"><a href="table.php">
          <i class="nc-icon nc-badge"></i>
      Liste de Postulant  </a></div>
	</div>
	</div>
	<?php	
	$user = apiRequest($apiURLBase);
	$avatar = $user->avatar;
	$discordname = $mysqli->real_escape_string($staff_name . ' ('.$user->username .'#'. $user->discriminator. ')');
	$id_user = $row['discord'];
	$id_candid = $row['numero'];
	$role = $row['poste'];
	
	$duplicate = $row2['duplicate'];
			if (isset($_POST['submit2'])) {
			require '../inc/connect.php';
			if ($_POST['oral'] == 'ban')
			{
			$oral = 'Refuser';
			} else {
			$oral = $_POST['oral'];
			}
			$commentaire = $mysqli->real_escape_string($_POST['commentaire']);
			if ($_POST['oral'] =='ban') {
			$raisonoral = $mysqli->real_escape_string($_POST['raison2']);
			} else {
			$raisonoral = $mysqli->real_escape_string($_POST['raisonoral']);
			}
			$sql4 = " UPDATE recruteur SET oral='$oral', commentaire= '$commentaire', recrutoral = '$discordname', raison_oral ='$raisonoral' ,date_recrutoral =CURRENT_TIMESTAMP()  WHERE recruteur.numero2=".$row['numero']." ";
			if (($_POST['oral']== 'Refuser' and $duplicate ==2) or ($_POST['oral']=='ban')) {
			 $sql5 = ' UPDATE info SET category_id=4 WHERE numero='.$row['numero'].' ';	
			if (mysqli_query($mysqli, $sql5)) {
                    echo '<script language="Javascript">
					<!--
					document.location.replace("details.php?discord='.$_GET['discord'].'&number='.$_GET['number'].'");
					// -->
					</script>';
			   } else {
				  echo "Error updating record: " . mysqli_error($mysqli);
			   }
			}
			if (mysqli_query($mysqli, $sql4)) {
					$url = "http://api.rytrak.fr/api/api_web.php?action=updatecandid&discordid=".$id_user."";
					$url2 = "http://api.rytrak.fr/api/api_web.php?action=deleterole&discordid=".$id_user."";
					if ($_POST['oral'] == 'Accepter') {
					$rep = array();
					if(!empty($_POST['role'])) {
							foreach($_POST['role'] as $check) {
							$rep[] = $check;
							}
					$roles = implode('%20', $rep);
					$pseudo = $_POST['pseudo'];
					$pseudo = str_replace ( ' ', '%20', $pseudo);
					$url3 = "http://api.rytrak.fr/api/api_web.php?action=addrole&discordid=".$id_user."&role=".$roles."";
					$url4 = "http://api.rytrak.fr/api/api_web.php?action=changenickname&discordid=".$id_user."&newnick=".$pseudo."";
					$call3 = call_data($url3);
					$call4 = call_data($url4);
					}else {
					$call3 = true;
					$call4 = true;
					}
					}else {
					$call4 = true;
					$call3 = true;
					}
					$call = call_data($url);
					$call2 = call_data($url2);
					if ($call and $call2 and $call3 and $call4){
                      echo '<script language="Javascript">
					<!--
					document.location.replace("details.php?discord='.$_GET['discord'].'&number='.$_GET['number'].'");
					// -->
					</script>';
                }
			   } else {
				  echo "Error updating record: " . mysqli_error($mysqli);
			   }
			
			}
			if (isset($_POST['submit3'])) {
			require '../inc/connect.php';
			$commentaire = $mysqli->real_escape_string($_POST['commentaire']);
			$sql6 = " UPDATE recruteur SET commentaire= '$commentaire'  WHERE recruteur.numero2=".$row['numero']." ";
			if (mysqli_query($mysqli, $sql6)) {
					 echo '<script language="Javascript">
					<!--
					document.location.replace("details.php?discord='.$_GET['discord'].'&number='.$_GET['number'].'");
					// -->
					</script>';
			//	echo "Record4 oral successfully";
			   } else {
				  echo "Error updating record: " . mysqli_error($mysqli);
			   }
			}
			
			mysqli_close($mysqli);
			if (isset($_POST['submit'])) {

			 require '../inc/connect.php';
			   if(! $mysqli ) {
				  die('Could not connect: ' . mysqli_error());
			   }
			  // echo 'Connected successfully<br>';
			   
			   
				if ($_POST['choice'] == 'accepter') {
				$category = 2;
				$raison = '';
				} else if ($_POST['choice'] == 'refuser') {
					if ($duplicate==2) {
				   $category = 4;
				   $raison =  $mysqli->real_escape_string($_POST['raison1']);
				   } else {
					$category = 3;
					$raison =  $mysqli->real_escape_string($_POST['raison1']);
				   }
				} else if ($_POST['choice'] == 'time') {
				$category = 5;
				$raison =  $mysqli->real_escape_string($row['raison']);
				}else {
				$category = 4;
				$raison =  $mysqli->real_escape_string($_POST['raison2']);
				}
			   $sql = ' UPDATE info SET category_id='.$category.' WHERE numero='.$row['numero'].' ';
			  $sql2 = " UPDATE info SET raison= '$raison'  WHERE numero=".$row['numero']." ";
			  $comment = $mysqli->real_escape_string($_POST['comment']);
			  if (isset($_POST['req']) or isset($_POST['add']) and ($recruteur) ){
			  $requete='INSERT INTO recruteur (`number`, `traitement`, `numero2`, `comment`) VALUES(NULL,"'.$discordname.'","'.$row['numero'].'", "'.$comment.'")'; // Ajouter également steamid
			  if (mysqli_query($mysqli, $requete)) {
				 if ($category == 2) {
				 if ($role == 'Opérateur 15' or $role == 'Opérateur 18' or $role =='Opérateur 17') {
					if ($role == 'Opérateur 15') {
					$role = "OPE15";
					} 
					if ($role == 'Opérateur 18') {
					$role = "OPE18";
					}
					if ($role == 'Opérateur 17') {
					$role = "OPE17";
					} 
				}else {
				$role = $role;
				}
				 $url = "http://api.rytrak.fr/api/api_web.php?action=accept&role=".$role."&discordid=".$id_user."&number=".$id_candid."";
				 $url2 = "http://api.rytrak.fr/api/api_web.php?action=updatecandid&discordid=".$id_user."";
				$data = call_data($url);
				$data2 = call_data($url2);
				if ($data and $data2) {
                    echo '<script language="Javascript">
					<!--
					document.location.replace("details.php?discord='.$_GET['discord'].'&number='.$_GET['number'].'");
					// -->
					</script>';
                }
				 }else {
				  $url = "http://api.rytrak.fr/api/api_web.php?action=updatecandid&discordid=".$id_user."";
				$data = call_data($url);
				if ($data) {
                    echo '<script language="Javascript">
					<!--
					document.location.replace("details.php?discord='.$_GET['discord'].'&number='.$_GET['number'].'");
					// -->
					</script>';
                }
				}
			   } else {
				  echo "Error adding Recrut: " . mysqli_error($mysqli);
			   }
				} else if ( (isset($_POST['add'])) and ($admin)) {
			$sql3="UPDATE recruteur SET admin = '$discordname' WHERE numero2=".$row['numero'].""; // Remplacer Numero par steamID
			
			if (mysqli_query($mysqli, $sql3)) {
					 if ($category == 2) {
				 if ($role == 'Opérateur 15' or $role == 'Opérateur 18' or $role =='Opérateur 17') {
					if ($role == 'Opérateur 15') {
					$role = "OPE15";
					} 
					if ($role == 'Opérateur 18') {
					$role = "OPE18";
					}
					if ($role == 'Opérateur 17') {
					$role = "OPE17";
					} 
				}else {
				$role = $role;
				}
				 $url = "http://api.rytrak.fr/api/api_web.php?action=accept&role=".$role."&discordid=".$id_user."&number=".$id_candid."";
				 $url2 = "http://api.rytrak.fr/api/api_web.php?action=updatecandid&discordid=".$id_user."";
				$data = call_data($url);
				$data2 = call_data($url2);
				if ($data and $data2) {
                    echo '<script language="Javascript">
					<!--
					document.location.replace("details.php?discord='.$_GET['discord'].'&number='.$_GET['number'].'");
					// -->
					</script>';
                }
				 }else {
				  $url = "http://api.rytrak.fr/api/api_web.php?action=updatecandid&discordid=".$id_user."";
				$data = call_data($url);
				if ($data) {
                    echo '<script language="Javascript">
					<!--
					document.location.replace("details.php?discord='.$_GET['discord'].'&number='.$_GET['number'].'");
					// -->
					</script>';
                }
				}
			   } else {
				  echo "Error updating record: " . mysqli_error($mysqli);
			   }
			}
			
			  /*
			   $category_id = $category;
			   $prenom = $row['prenom']; 
			   */
			   
			  if (mysqli_query($mysqli, $sql)) {
			   // Notification par mail ou discord
				//if ((include 'mail2.php') == TRUE) {
                    // header("Refresh:0");
                //}
			  
				  echo '<script language="Javascript">
					<!--
					document.location.replace("details.php?discord='.$_GET['discord'].'&number='.$_GET['number'].'");
					// -->
					</script>';
			   } else {
				  echo "Error updating record: " . mysqli_error($mysqli);
			   }
			   if (mysqli_query($mysqli, $sql2)) {
			   //header("Refresh:0");
				  echo '<script language="Javascript">
					<!--
					document.location.replace("details.php?discord='.$_GET['discord'].'&number='.$_GET['number'].'");
					// -->
					</script>';
			   } else {

				  echo "Error updating record: " . mysqli_error($mysqli);
			   }
			  
			   mysqli_close($mysqli);
		   }
   ?>

        </div>
    </div>
</div>
</div>
</body>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>

<?php
if ($catego=='7') {
$msg = 'yes'; } 
else { $msg = 'no';}
$num = $_GET['number'];
$discordname = $staff_name . ' ('.$user->username .'/'. $user->discriminator. ')';
?>
<script>
$(function() {
    $('.toggle').on('click', function() {
	var checkbox = $('#checkbox').val();
			  $.ajax
				({
				  type: "POST",
				  url: "inc/lock_submit.php?number=<?php echo $_GET['number'];?>&name=<?php echo $discordname;?>",
				  data: { "checkbox": checkbox },
				  success: function (data) {
					$('.result').html(data);
					document.location.reload(true);
					//return false;
					//$('#checkbox').setAttribute("checked", "");
					//$('#contactForm')[0].reset();
				  }
				});
	
	
		var a = document.getElementById('checkbox');
	  if ($(this).hasClass('on')) {
		 $(this).removeClass('on');
		 $('#checkbox').attr("value", "1");
		$('#checkbox').removeAttr("checked", "");	
      } else {
	  $(this).addClass('on');
	   $('#checkbox').attr("value", "7");
	  $('#checkbox').attr("checked", "");	
      }
    });
  });
$(document).ready(function() {
	var msg = '<?php echo $msg;?>';
	if (msg == 'yes') {
	$('.toggle').removeClass("on");
	 $('#checkbox').attr("value", "1");
	}else {
	$('.toggle').addClass("on");
	$('#checkbox').attr("checked", "");	
	 $('#checkbox').attr("value", "7");
	}
	$.each($('#navi').find('li'), function() {
				$(this).toggleClass('active', 
					window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
				}); 

});				
	function showhide(id_div) {
		//var s = document.getElementById(id_div);
		if (document.getElementById(id_div).style.display === "none") {
			document.getElementById(id_div).style.display = "block";
		} else {
			document.getElementById(id_div).style.display = "none";
		}
	} 
	$(window).on('load', function() {
	$('.majorpoints').click(function(){
		$(this).find('.hiders').toggle();
		
	});			
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
(function() {
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
})();

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