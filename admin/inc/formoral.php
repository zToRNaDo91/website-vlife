<?php $place = basename(getcwd()); 
if ($place == 'inc') {

header ('Location: ../');
} else {
?>
		<style>
		.multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
		</style>
		<script>
	$(document).click(function (e) {
           e.stopPropagation();
          var container = $(".multiselect");

       //check if the clicked area is dropDown or not
        if (container.has(e.target).length === 0) {
         $('#checkboxes').hide();
         }
        })
		var expanded = false;
		function showCheckboxes() {
		  var checkboxes = document.getElementById('checkboxes');
		  if (!expanded) {
			checkboxes.style.display = "block";
			expanded = true;
		  } else {
			checkboxes.style.display = "none";
			expanded = false;
		  }
		}
		</script>
		<script>
$(window).on('load', function() {
		var r = $(".refas"); 
		var a = $(".multiselect");
		var b = $(".pseudo");
		var v = $(".vies"); 
		$('input[type="radio"]').click(function(){
		if($(this).attr("id")=="refuse"){
		r.show('slow');
		r.attr("required", "");
      } else {
		r.hide('slow');
		r.removeAttr("required", "");
	  }
	  if($(this).attr("id")=="accep"){
		a.show('slow');
		b.show('slow');
      } else {
		a.hide('slow');
		b.hide('slow');
	  }
	   if($(this).attr("id")=="bane"){
		v.show('slow');
		v.attr("required", "");
      } else {
		v.hide('slow');
		v.removeAttr("required", "");
	  }
		
		});
	  
		
});
</script>
		
		<form method="post" style="margin-top:30px;" class="needs-validation" novalidate>
		<fieldset class='oral'>
		<legend> Partie orale </legend>   
		 Résultat entretien oral<br> 
		 
		<div class="custom-control custom-radio">
			<input type="radio" id="accep" value = "Accepter" name="oral" class="custom-control-input" required> 
			<label class="custom-control-label" for="accep" class="custom-control-input"> Accepter</label>
			</div>
			 <div class="multiselect" style="display:none;">
			<div class="selectBox" onclick="showCheckboxes()">
			  <select class="custom-select">
				<option>Ajout Roles</option>
			  </select>
			  <div class="overSelect"></div>
			</div>
			<div id="checkboxes" >
			    <div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name ="role[]" id="one" value="668462013563011084" checked disabled/>
				<label for="one" class="custom-control-label">Civil</label>
				</div>
				<?php
				$poste = $row['poste'];
				if ($poste== 'Pompier' or $poste =='Opérateur 18'){
				echo '
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name="role[]" id="two" value="676539765578792981" checked disabled/>
				 <label for="two" class="custom-control-label">CIR</label>
				</div>
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name="role[]" id="three" value="675414366392418364"/>
				 <label for="three" class="custom-control-label">OPE18</label>
				</div>
				';
				}elseif ($poste== 'Police' or $poste =='Opérateur 17'){
				echo '
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name="role[]" id="two" value="677597098597810249" checked disabled/>
				 <label for="two" class="custom-control-label">ELEVE</label>
				</div>
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name="role[]" id="three" value="721658537217884221" checked disabled/>
				 <label for="three" class="custom-control-label">ADS</label>
				</div>
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name="role[]" id="four" value="668440914129190912"/>
				 <label for="four" class="custom-control-label">PN</label>
				</div>
				';
				}
				elseif ($poste== 'SAMU' or $poste == 'Opérateur 15'){
				echo '
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name="role[]" id="two" value="676539882188832774" checked disabled/>
				 <label for="two" class="custom-control-label">SAMU-93/SMUR</label>
				</div>
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name="role[]" id="three" value="722460815105589370"/>
				 <label for="three" class="custom-control-label">OPE15</label>
				</div>
				
				';
				}
				?>
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name="role[]" id="five" value="573081015216504832"/>
				 <label for="five" class="custom-control-label">PRO SP</label>
				</div>
				
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name ="role[]" id="six" value ="697219505931419668"/>
				<label for="six" class="custom-control-label">PRO SANTE</label>
				</div>
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name ="role[]" id="seven" value ="697219755257626754"/>
				<label for="seven" class="custom-control-label">PRO PSY</label>
				</div>
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name ="role[]" id="eight" value ="573081059831316480"/>
				<label for="eight" class="custom-control-label">PRO PN/GN</label>
				</div>
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name ="role[]" id="nine" value ="573081102135197696"/>
				<label for="nine" class="custom-control-label">PRO SECOURISTE</label>
				</div>
				<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" name ="role[]" id="ten" value ="573081182540136448"/>
				<label for="ten" class="custom-control-label">PRO ARMEE</label>
				</div>
				
				
			</div>
		  </div>
		  <div class="pseudo" style="margin-top: 5px;display:none;">
		  <label for="Pseudo" style="display: ruby-base;">Pseudo : </label>	
		  <input type="text" class="form-control" name="pseudo" id="Pseudo" style="width:150px;height:30px;margin-left: 90px;margin-top: -30px;"> 
		  </div>
		<div class="custom-control custom-radio">
		<input type="radio" id="refuse" value = "Refuser" name="oral" class="custom-control-input"> 
		
		<label class="custom-control-label" for="refuse"> Refuser</label><br> 
		</div>
		

		<input type="text" class="form-control refas"  name="raisonoral" style="width:150px;height:30px;margin-left: 90px;margin-top: -30px; display:none;"> 
		 <div class="invalid-feedback">
       Merci d'ajouter une raison. 
		</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="bane" name="oral" value="ban" class="custom-control-input bannir">
				<label class="custom-control-label" for="bane">Refuser à vie</label>
				<div class="invalid-feedback">
					Merci de cocher une case.
					</div>	
			</div>
				<div>
				<select class ="vies custom-select" style="display:none;" name="raison2">
                <option value="" selected>Selection..</option>
				<option value="Tricherie (copie de candidature)">Triche (Copie de candidature)</option>
                <option  value="Tricherie">Tricherie</option>
				<option  value="Manque de respect total pour le recruteur">Manque de respect total pour le recruteur</option>
				<option value="Mensonge et incohérence sur la candidature">Mensonge et incohérence sur la candidature</option>
				<option value="Vous avez quitté le serveur">Vous avez quitté le serveur</option>
				<option value="Double candidature">Double candidature</option>
				</select>
				<div class="invalid-feedback">
					Merci de sélectionner une raison.
					</div>	
				</div>
		<div class="form-group">
		<label> Commentaire : </label><br><textarea class="form-control"  name = "commentaire" required ></textarea>
		 <div class="invalid-feedback">
        Merci d'écrire un commentaire.
      </div>
		</div>					 
				<input class="btn btn-info btn-fill" type="submit" name="submit2" value="Valider">
		</fieldset>
		</form>
		
<?php
}
?>
