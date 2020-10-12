<?php $place = basename(getcwd()); 
if ($place == 'inc') {

header ('Location: ../');
} else {
 $user = apiRequest($apiURLBase); 
?>
   <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<section id="contact" class="inner-page contact">
		  <div class="container" data-aos="fade-up">
			<div class="section-title">
			  <h2>Bulletin d'adhésion</h2>
			  
			  <?php if ($derniere) { 
				$count = mysqli_query($mysqli, "SELECT discord, count(*) as duplicate
				FROM info WHERE discord = '".$user->id."'
				GROUP BY discord
				");
				$row10 = mysqli_fetch_assoc($count);
				$duplicate = $row10['duplicate'];
				if ($duplicate == 1) {
				$raison = $row['raison'];
				$raison_oral = $row['raison_oral'];
				echo "<p>Salutation, ", $row['username'], '<br>' ;
				echo "C'est votre dernière chance, soyez plus attentif ! </p>";
				if (!empty($raison)) {
				echo '<i>Pour rappel, la raison de votre refus était : '.$raison. '</i>';
				}
				if (!empty($raison_oral)) {
				echo '<i>Pour rappel, la raison de votre refus à l\'oral était : '.$raison_oral. '</i>';
				}
				}
			  }else {?>
			  <p>Veuillez répondre aux questions suivantes</p>
				<i>Prenez le temps de lire l'ensemble des questions.</i>
			<?php 
			}
			?>
				
			</div>

			<div class="row">

				<div class="col-lg-2 d-flex align-items-stretch">

			  </div>
			
			  <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
				<!--<form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
				<form role="form" method="post" enctype="multipart/form-data" id="contactForm" class="php-email-form needs-validation" novalidate>
				 
				 <div class="tab">
				  
				  <p>👨‍🎓 Vous souhaitez intégrer un domaine de secours, sur notre serveur de simulation, ce bulletin d'adhésion constitue votre première démarche administrative pour votre recrutement.<br>
				  </p>
				  <img src="assets/img/discord.png" width = "200px"></img>
				  <p>
				  
				   
				  Pour pouvoir poursuivre vous devez <b>obligatoirement</b> rejoindre notre discord ci-dessous. <br>
				  Discord est une plateforme de discussion, c'est un élément essentiel pour permettre d'être recruté et de jouer sur notre serveur<br><br>
				 ℹ | Merci d'actualiser la page après avoir rejoint le discord
				  </p> 
				  </div>
				 <div class="tab">
				 <p>👨‍🎓 CRITÈRES D'ADHÉSION :<br>
				- Être assidu, courtois, ponctuel.<br>
				- Avoir minimum 15 ans (CIVIL) ou 16 ans (MÉTIERS DE SECOURS)<br>
				<br>
				
				Nous ne traiterons aucune demande concernant les demandes de recrutement staff.<br>
				<br>
				ℹ | À la suite de votre candidature, <b>vous serez recontacté sur DISCORD, par message privé, sous 48h maximum</b>, si aucune réponse ne vous est formulée, merci de recontacter les ressources humaines via les salons disponibles prévus à cet effet.<br>
				Pour toutes informations supplémentaires, veuillez vous référer au <a class="faq-button"type="button" data-toggle="modal" data-target="#FAQ">FAQ</a>. 
				</p>
				 </div>

				 <div class="tab">
				 
					<div class="form-group">
					  <label for="prenom">Votre prénom réel <span style='color:red'>*</span></label>
					  <input type="text" name="prenom" class="form-control" id="prenom"  maxlength="35" required />
					  <div class="invalid-feedback">
					  Merci de remplir cette partie.
					</div>
					</div>
						  <div class="form-group">
					<label for="age">Votre âge réel <span style='color:red'>*</span></label>
					<input type="number" class="form-control" name="age" id="age" max="99" required />
					<?php
					if (!empty($_POST['age'])) {
							$age = $_POST['age'];
							if ( $age <= 14) {
							$category = 4;
							$raison = "Raison";
							}else {
							$category = 1;
							}
						}
					?>
					
					
					<div class="invalid-feedback">
					  Merci de fournir votre âge
					</div>
				  </div>
				  <div class="form-group">
					<label for="name">Quelles sont vos passions ? <span style='color:red'>*</span></label>
					<input type="text" class="form-control" name="passion" maxlength="100" required></input>
					<div class="invalid-feedback">
					  Merci de remplir cette partie.
					</div>
				  </div>					
					
					<div class="form-group ">
					  <label for="email">Votre email <span style='color:red'>*</span></label>
					  <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
					  <?php			
					 echo ' <input value="'. $user->email .' " class="form-control" type="email" name="email" id="email" data-rule="email" readonly/> ';
					
					  ?>
					</div>
					<div class="form-group ">
					  <label for="username">Votre pseudo Discord <span style='color:red'>*</span></label>
					  <?php			
					 echo ' <input value="'. $user->username .'#'. $user->discriminator .' " class="form-control" type="text" name="username" id="username" readonly/> ';
					  ?>
					</div>
					
					
					<div class="form-group ">
					  <label for="discord">Votre ID Discord <span style='color:red'>*</span></label>
					  <?php			
					 echo ' <input value="'. $user->id .'" class="form-control" type="text" name="discord" id="discord" readonly/> ';
					  ?>
					</div>
					
			
				<div class="col-md-5 col-sm-5 col-xs-12 form-group">
					<label class="labeltext">Avez-vous un microphone ? <span style='color:red'>*</span></label><br>
					<div class="form-check">

					<label class="customradio"><span class="radiotextsty">Oui</span>
					  <input type="radio" id="micro1" checked="" name="micro" value="Oui" data-rule="required">
					  <span class="checkmark"></span>
					</label>        
					<label class="customradio"><span class="radiotextsty">Non</span>
					  <input type="radio" name="micro" id="micro2" value="Non">
					  <span class="checkmark"></span>
					</label>

					</div>
					<div class="invalid-feedback">
					  Merci de remplir cette partie.
					</div>
				</div>
				
				
				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
					<label class="labeltext">Avez-vous le jeu GTA V (FiveM) sur PC ? <span style='color:red'>*</span></label><br>
					<div class="form-check">

					<label class="customradio"><span class="radiotextsty">Oui</span>
					  <input type="radio" id="gta1" name="gta" checked="" value="Oui" data-rule="required">
					  <span class="checkmark"></span>
					</label>        
					<label class="customradio"><span class="radiotextsty">Non</span>
					  <input type="radio" name="gta" id="gta2" value="Non">
					  <span class="checkmark"></span>
					</label>

					</div>
					<div class="invalid-feedback">
					  Merci de remplir cette partie.
					</div>
				</div>
			
		
				  </div>
				  
				  <div class="tab">
				  <p><b> Vos disponibilités</b></p> <br>
				  
				<div class="form-group">
					  <label for="conge">Quelles sont vos disponibilités en période de congé/vacance ? <span style='color:red'>*</span></label>
					  <input type="text" name="conge" class="form-control" id="conge" maxlength="100" required/>
					  <div class="invalid-feedback">
						  Merci de remplir cette partie.
						</div>
				</div>
				<div class="form-group">
					  <label for="travail">Quelles sont vos disponibilités en période scolaire/travail ? <span style='color:red'>*</span></label>
					  <input type="text" name="travail" class="form-control" id="travail" maxlength="100" required/>
					  <div class="invalid-feedback">
						  Merci de remplir cette partie.
						</div>
				</div>
				<div class="form-group">
					  <label for="absent"> Avez-vous des impératifs pouvant vous faire arriver en retard ou être absent à plusieurs sessions ? <i>(Embouteillage, Vie familial etc...) <span style='color:red'>*</span></i></label>
					  <input type="text" name="absent" class="form-control" id="absent" maxlength="100" required/>
					  <div class="invalid-feedback">
						  Merci de remplir cette partie.
						</div>
				</div>
				<div class="form-group">
					  <label for="dispo">Pensez-vous pouvoir être disponible de 21h à minuit ? <span style='color:red'>*</span></label>
					  <input type="text" name="dispo" class="form-control" id="dispo" maxlength="100" required/>
					  <div class="invalid-feedback">
						  Merci de remplir cette partie.
						</div>
				</div>				
				  </div> 
				  
				  <div class="tab">
				  
				  <div class="form-group ">
				  <label for "poste"> Quel est le poste pour lequel vous souhaitez postuler ? <span style='color:red'>*</span><br>
					<i>👉 Le poste "Organisme civil / Vie civile" comprend l'accès à la vie civile du serveur, <br>
					mais aussi le Volontaire Service Civique des sapeurs pompiers (mission de secourisme à l'ambulance), <br>
					et l'Adjoint de Sécurité de la police nationale (patrouille avec des gardiens de la paix).<br>
					Seul la vie civil est accessible dès 15 ans, le reste est accessible à partir de 16 ans</i>
					</label>
				  <select class="custom-select" name="poste" id="poste" maxlength="100" required>
				  <option selected value="" required>Sélectionner un poste</option>
				  <option value="Pompier"> Sapeurs-Pompiers</option>
				  <option value="Opérateur 18">Opérateur 18</option>
				  <option value="Police">Police Nationale</option>
				  <option value="Opérateur 17"> Opérateur 17</option>
				  <option value="SAMU">SAMU 93 / SMUR</option>
				  <option value="Opérateur 15">Opérateur 15</option>
				  <option value="Civil">Organisme civil / Vie Civil</option>
				</select>
				<div class="invalid-feedback">
						  Merci de sélectionner un poste.
						</div>
				</div>
				<div class="form-group">
					  <label for="XP">Votre expérience en RP (le jeu + nom du serveur + rang + plateforme) <span style='color:red'>*</span></label>
					  <textarea name="XP" class="form-control" id="XP" minlength="30" maxlength="350" required rows="3"/></textarea>
					  <div class="invalid-feedback">
						  Merci de mettre minimum 30 caractères. 
						</div>
				</div>
				<div class="form-group">
					  <label for="RP">Les gameplay que vous avez joué (+ exemple de scène RP) <span style='color:red'>*</span></label>
					  <textarea name="RP" class="form-control" id="RP" minlength="30" maxlength="350" required rows="3"/></textarea>
					  <div class="invalid-feedback">
						  Merci de mettre minimum 30 caractères. 
						</div>
				</div>
				<div class="form-group">
					  <label for="qual">Disposez-vous d'une qualité particulière nécessaire au poste ? (Ex : Précision de tir, coordination, réactif et calme en cas de crise etc...) <span style='color:red'>*</span></label>
					  <input type="text" name="qual" class="form-control" id="qual" maxlength="100"  required/>
				<div class="invalid-feedback">
						  Merci de remplir cette partie.
						</div>
				</div>
				
				<div class="col-md-10 col-sm-10 col-xs-12 form-group">
					<label class="labeltext" for="metier">Avez-vous de l'expérience réel, dans un métier de secours ? <span style='color:red'>*</span></label><br>
					<div class="form-check">

					<label class="customradio"><span class="radiotextsty">Oui</span>
					  <input type="radio" id="metier1" name="metier" value="Oui"  onclick="show(1,2)" required>
					  <span class="checkmark"></span>
					</label>        
					<label class="customradio"><span class="radiotextsty">Non</span>
					  <input type="radio" name="metier" id="metier2" value="Non" onclick="hide(1,2)" required checked>
					  <span class="checkmark"></span>
					</label>
					<div class="invalid-feedback">
						  Merci de remplir cette partie.
						</div>
					</div>
					
				</div>
				
				<div class="form-group" id ="1" style="display:none;">
					  <label for="met"> Quel métier, et depuis combien de temps ? <span style='color:red'>*</span></label>
					  <input type="text" name="met" class="form-control" id="2" maxlength="100">
					  <div class="invalid-feedback">
						  Merci de remplir cette partie.
						</div>
					 
				</div>				
				 
				 </div>
				 
				   <div class="tab">
				  <p><b> Rédaction : </b></p> <br>
				  
				<div class="form-group">
					  <label for="motive">Présentez votre motivation pour nous rejoindre <span style='color:red'>*</span></label>
					  <textarea name="motive" class="form-control" id="motive" minlength="30" maxlength="350" required rows="3"/></textarea>
					  <div class="invalid-feedback">
						  Merci de mettre minimum 30 caractères. 
						</div>
				</div>
				<div class="form-group">
					  <label for="scenario">Inventez une intervention/scénario quotidienne/commune roleplay que vous pourrez réaliser en tant que civil pour les secours <span style='color:red'>*</span></label>
					  <textarea name="scenario" class="form-control" id="scenario" minlength="30" maxlength="350" required rows="3"/></textarea>
					  <div class="invalid-feedback">
						  Merci de mettre minimum 30 caractères. 
						</div>
				</div>
				<div class="form-group">
					  <label for="autre">Autre chose à rajouter ?</label>
					  <input type="text" name="autre" class="form-control" id="autre" maxlength="150"/>
					  <div class="invalid-feedback">
						  Merci de remplir cette partie.
						</div>
				</div>
				  <div class="custom-control custom-checkbox mb-3">
					<input type="checkbox" name ='validation' class="custom-control-input" id="validation" value="valide" required>
					<label class="custom-control-label" for="validation">Je confirme avoir 15 ans ou plus et j'accepte les 
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Conditions">conditions</button></label>
					<div class="invalid-feedback">Merci de cocher.</div>
				  </div>
				<p>Vous pouvez appuyer sur "Quitter la page" aprés avoir envoyé la candidature.</p>
			   </div>
				  <div class="mb-3">
					<div class="loading">Chargement</div>
					<div class="error-message"></div>
					<div class="sent-message">Ton message à été envoyé, merci</div>
				  </div>
				    <div style="overflow:auto;">
					<div style="float:right;">
					  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
					  <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
					</div>
					</div>
					 <div style="text-align:center;margin-top:40px;">
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
					  </div>
				</form>
				</div>

			</div>

		  </div>
		  <div class="modal fade" id="Conditions" tabindex="-1" aria-labelledby="Conditions" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ConditionsLabel" style="color:black;">Conditions d'utilisations de vos données</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color:black;">
        Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par vLife pour la gestion du recrutement.<br> La base légale du traitement est de 3 ans.<br>

Les données collectées seront communiquées aux seuls destinataires suivants : ressources humaines et personnels de vLife.<br>

Les données sont conservées pendant 3 ans, pour la préservation du résultat.<br><br>

Vous pouvez accéder aux données vous concernant, les rectifier, demander leur effacement ou exercer votre droit à la limitation du traitement de vos données. (en fonction de la base légale du traitement, mentionner également)<br>
Vous pouvez retirer à tout moment votre consentement au traitement de vos données ;<br> 
Vous pouvez également vous opposer au traitement de vos données ;<br> 
Vous pouvez également exercer votre droit à la portabilité de vos données)<br><br>

Consultez le site cnil.fr pour plus d’informations sur vos droits.<br><br>

Pour exercer ces droits ou pour toute question sur le traitement de vos données dans ce dispositif, vous pouvez contacter notre service de contact : vlife.gmod@gmail.com   <br><br>

Si vous estimez, après nous avoir contactés, que vos droits « Informatique et Libertés » ne sont pas respectés, vous pouvez adresser une réclamation à la CNIL.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
		</section>
			<?php
						$guild = apiRequest($apiURLGuild);
				 $id = '470897860473389066'; //470897860473389066
				 $msg = 'not found';
				foreach($guild as $obj)
				{
					if ($obj->id == $id)
					{
						$msg = 'found';
						break;
					}
				}
			?>
			<script>
			window.onbeforeunload = function(){
			return 'Are you sure you want to leave?';
			};
				function hide(id_div, id_input)
				{

				if (document.getElementById(id_div).style.display=='block')
					{
					document.getElementById(id_div).style.display='none';
					document.getElementById(id_input).required= false;
					}  
				}

			function show(id_div, id_input)
				{

				if (document.getElementById(id_div).style.display=='none')
					{
					document.getElementById(id_div).style.display='block'
					document.getElementById(id_input).required= true;
					}  
				}			
			</script>
			<script>
			var msg = "<?php echo $msg; ?>";
			var currentTab = 0; // Current tab is set to be the first tab (0)
			showTab(currentTab); // Display the current tab
			//const addCSS = s =>(d=>{d.head.appendChild(d.createElement("style")).innerHTML=s})(document);
				
			function showTab(n) {
			  // This function will display the specified tab of the form...
			  var x = document.getElementsByClassName("tab");
			  x[n].style.display = "block";
			  //... and fix the Previous/Next buttons:
			  if (n == 0) {
				document.getElementById("prevBtn").style.display = "none";
			  } else {
				document.getElementById("prevBtn").style.display = "inline";
			  }
			  if (n == (x.length - 1)) {
				document.getElementById("nextBtn").innerHTML = "Envoyer";
				
			  } else {
				document.getElementById("nextBtn").innerHTML = "Suivant";
				document.getElementById("nextBtn").setAttribute("type", "submit"); 
				document.getElementById("nextBtn").setAttribute("name", "submit"); 
			  }
			  //... and run a function that will display the correct step indicator:
			  fixStepIndicator(n)
			}

			function nextPrev(n) {
			  // This function will figure out which tab to display
			  var x = document.getElementsByClassName("tab");
			  // Exit the function if any field in the current tab is invalid:
			  if (n == 1 && !validateForm()) return false;
			  // Hide the current tab:
			  x[currentTab].style.display = "none";
			  // Increase or decrease the current tab by 1:
			  currentTab = currentTab + n;
			  // if you have reached the end of the form...
			  if (currentTab >= x.length) {
				// ... the form gets submitted:
				document.getElementById("contactForm").submit();
				return false;
			  }
			  // Otherwise, display the correct tab:
			  showTab(currentTab);
			}

			
			function validateForm() {
			
			  // This function deals with validation of the form fields
			  var w, x, y, i, z, valid = true;
			  x = document.getElementsByClassName("tab");
			  w = x[currentTab].getElementsByTagName("textarea");
			  y = x[currentTab].getElementsByTagName("input");
			  z = x[currentTab].getElementsByTagName("select");
			  //var name = element.getAttribute("name");
			  // form.getElementsByClassName('form-control');
			  // A loop that checks every input field in the current tab:
			  for (i = 0; i < y.length; i++) {
				// If a field is empty...
				 if(y[i].type.toLowerCase() == 'number') {
				 if (y[i].value > 99 || y[i].value=="" ){
					  // add an "invalid" class to the field:
					  y[i].className += " invalid";
					  // add the focus when invalid
					 
					   y[i].focus();
					  // and set the current valid status to false
					  valid = false;
					}
				} else if(y[i].type.toLowerCase() == 'checkbox') {
					if (!(y[i].checked)) {

					y[i].className += " invalid";
					  // and set the current valid status to false
					  valid = false;
					
					}
				}else {
					if (y[i].value == "" && y[i].hasAttribute('required')){
					  // add an "invalid" class to the field:
					  y[i].className += " invalid";
					   // add the focus when invalid
					   y[i].focus();
					  // and set the current valid status to false
					  valid = false;
					}
				}
			  }
			  if (msg == 'not found') {
			  valid = false;
			  }
			    for (i = 0; i < z.length; i++) {
				// If a field is empty...
				if (z[i].value == "" && z[i].hasAttribute('required')){
				  // add an "invalid" class to the field:
				  z[i].className += " invalid";
				   // add the focus when invalid
				   z[i].focus();
				  // and set the current valid status to false
				  valid = false;
				} 
			  }
			  for (i = 0; i < w.length; i++) {
				// If a field is empty...
				if ( w[i].value.length < 30 && w[i].hasAttribute('required')){
				  // add the focus when invalid
				  w[i].focus();
				  // add an "invalid" class to the field:
				  w[i].className += " invalid";
				  // and set the current valid status to false
				  valid = false;
				} 
			  }
			  // If the valid status is true, mark the step as finished and valid:
			  if (valid) {
				document.getElementsByClassName("step")[currentTab].className += " finish";
			  }return valid; // return the valid status
			} 

			function fixStepIndicator(n) {
			  // This function removes the "active" class of all steps...
			  var i, x = document.getElementsByClassName("step");
			  for (i = 0; i < x.length; i++) {
				x[i].className = x[i].className.replace(" active", "");
			  }
			  //... and adds the "active" class on the current step:
			  x[n].className += " active";
			}
        // Self-executing function

			</script>
			  
		  <?php
		include '../inc/connect.php';

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

	
		if (isset($_POST['submit'])) {
		$request = mysqli_query($mysqli, 'SELECT numero FROM info ORDER BY numero DESC LIMIT 1');
		$row = mysqli_fetch_assoc($request);
		$prenom = $mysqli->real_escape_string($_POST['prenom']);
		$age = $mysqli->real_escape_string($_POST['age']);
		$passion = $mysqli->real_escape_string($_POST['passion']);
		$email = $mysqli->real_escape_string($_POST['email']);
		$username = $mysqli->real_escape_string($_POST['username']);
		$discord = $mysqli->real_escape_string($_POST['discord']);
		$micro = $mysqli->real_escape_string($_POST['micro']);
		$gta = $mysqli->real_escape_string($_POST['gta']);
		$conge = $mysqli->real_escape_string($_POST['conge']);
		$travail = $mysqli->real_escape_string($_POST['travail']);
		$absent = $mysqli->real_escape_string($_POST['absent']);
		$dispo = $mysqli->real_escape_string($_POST['dispo']);
		$poste = $mysqli->real_escape_string($_POST['poste']);
		$XP = $mysqli->real_escape_string($_POST['XP']);
		$RP = $mysqli->real_escape_string($_POST['RP']);
		$qual = $mysqli->real_escape_string($_POST['qual']);
		$metier = $mysqli->real_escape_string($_POST['metier']);
		$met = $mysqli->real_escape_string($_POST['met']);
		$motive = $mysqli->real_escape_string($_POST['motive']);
		$scenario = $mysqli->real_escape_string($_POST['scenario']);
		$autre = $mysqli->real_escape_string($_POST['autre']);
		$validation = $mysqli->real_escape_string($_POST['validation']);
		$user = apiRequest($apiURLBase);
		$avatar = $user->avatar;
		$requete="INSERT INTO info (`numero`, `prenom`, `age`,`category_id`, `passion`, `email`, `username`, `discord`, `micro`, `gta`, `conge`, `travail`, `absent`, `dispo`, `poste`, `XP`, `RP`, `qual`, `metier`, `met`, `avatar`, `motive`, `scenario`, `autre`, `validation`)
		                      VALUES(NULL,'".$prenom."','".$age."','".$category."','".$passion."','".$email."','".$username."','".$discord."','".$micro."','".$gta."','".$conge."','".$travail."','".$absent."','".$dispo."','".$poste."','".$XP."','".$RP."','".$qual."','".$metier."','".$met."','".$avatar."','".$motive."','".$scenario."','".$autre."','".$validation."')";
		
		if ($age <= 14) {
				$requete3 = mysqli_query($mysqli, 'SELECT numero FROM info ORDER BY numero DESC LIMIT 1');
				$row1 = mysqli_fetch_assoc($requete3);
				$nb = mysqli_num_rows($requete3);
				if ($nb == 0) {
				$numero = 1;
				}else {
				$numero = $row1['numero'];
				}
				$requete2='INSERT INTO recruteur (`number`, `traitement`, `numero2`,`date_recrutoral`) VALUES(NULL,"Machine", "'.$numero.'", CURRENT_TIMESTAMP())';
				 $result2 = $mysqli->query($requete2);

				if ($result2) {
					echo 'Insert WOrk';
				}else {
					echo 'Erreur'  . mysqli_error($mysqli);
				}
			}
		
		$result = $mysqli->query($requete);
		 if ($result) {
				if ($poste == 'Opérateur 15' or $poste == 'Opérateur 18' or $poste =='Opérateur 17') {
					if ($poste == 'Opérateur 15') {
					$poste = "OPE15";
					} 
					if ($poste == 'Opérateur 18') {
					$poste = "OPE18";
					}
					if ($poste == 'Opérateur 17') {
					$poste = "OPE17";
					} 
				}else {
				$poste = $_POST['poste'];
				}
					if ($age <= 14) {
					echo '<script language="Javascript">
							<!--
							document.location.replace("index.php");
							// -->
							</script>';
					}else {
					$discord = $user->id;
					$url = "https://www.rytrak.fr/api/api_web.php?action=allnotif&role=".$poste."";
					$url2 = "https://www.rytrak.fr/api/api_web.php?action=sendcandid&discordid=".$discord."";
					$call = call_data($url);
					$call2 = call_data($url2);
					if ($call and $call2){
					echo '<script language="Javascript">
							<!--
							document.location.replace("index.php");
							// -->
							</script>';
					}
					}
            }else{
                echo "Erreur" . mysqli_error($mysqli);}
		}

		 }
		?>
		 <!-- End Contact Section -->