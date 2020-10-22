<?php $place = basename(getcwd()); 
if ($place == 'inc') {

header ('Location: ../');
} else {
?>
		<script>
		$(window).on('load', function() {
		var r = $(".refas"); 
		var v = $(".vies"); 
		$('input[type="radio"]').click(function(){
		if($(this).attr("id")=="refuse"){
		r.show('slow');
		r.attr("required", "");
      } else {
		r.hide('slow');
		r.removeAttr("required", "");
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

// Example starter JavaScript for disabling form submissions if there are invalid fields

		</script>
		
		<form method="post" style="margin-top:30px;" class="needs-validation" novalidate>
		<fieldset class='oral'>
		<legend> Partie orale </legend>   
		 Résultat entretien oral<br> 
		 
		 <div class="custom-control custom-radio">
		<input type="radio" id="accepter" value = "Accepter" name="oral" class="custom-control-input" required> 
		<label class="custom-control-label" for="accepter" class="custom-control-input"> Accepter</label>
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
				<option  value="Manque de respect total pour le recruteur">Manque de respect total pour le lecteur</option>
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
