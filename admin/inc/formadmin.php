﻿<?php $place = basename(getcwd()); 
if ($place == 'inc') {

header ('Location: ../');
} else {
?>
		<script>
		$(window).on('load', function() {
		var r = $(".ref"); 
		var v = $(".vie"); 
		$('input[type="radio"]').click(function(){
		if($(this).attr("id")=="refus"){
		r.show('slow');
		r.attr("required", "");
      } else {
		r.hide('slow');
		r.removeAttr("required", "");
	  }
	  if($(this).attr("id")=="ban"){
		v.show('slow');
		v.attr("required", "");
      } else {
		v.hide('slow');
		v.removeAttr("required", "");
	  }
});
});
		</script>
		
			<form method="post" class="needs-validation" novalidate>
			<fieldset>
			<legend > Réponse Admin </legend> 
           <div class="custom-control custom-radio">
			<input type="radio" id="accept" value = "accepter" name="choice"  class="custom-control-input" required>
			<label class="custom-control-label" for="accept">Accepté</label>
			</div>
			<div class="custom-control custom-radio">
			<input type="radio" id="refus" value ="refuser" name="choice"  class="custom-control-input refuser" >
			<label  class="custom-control-label" for="refus" >Refusé</label> 
			</div>
			  <div>
			 <select  class = "ref custom-select" style="display:none;" name="raison1">
                <option value=""selected>Selection..</option>
				<option value="Manque de motivation ressentie sur la candidature">Manque de motivation ressentie sur la candidature</option>
				<option  value="Manque de sérieux sur la candidature">Manque de sérieux sur la candidature</option>
                <option  value="Fautes d'orthographe et de grammaire importante">Fautes d'orthographe et de grammaire importante</option>
				<option value="Le poste que vous avez précisé n'est pas possible en vue de votre âge">Le poste que vous avez précisé n'est pas possible en vue de votre âge</option>
				<option value="Vous n'avez pas répondu correctement aux questions">Vous n'avez pas répondu correctement aux questions</option>
				<option value="Votre candidature est trop peu détaillé
">Votre candidature est trop peu détaillé</option>
			</select>
			 <div class="invalid-feedback">
			Merci de sélectionner une raison.
			</div>	
			</div>
			
           <div class="custom-control custom-radio">
            <input type="radio" id="ban" name="choice" class="custom-control-input bannir">
			<label class="custom-control-label" for="ban">Refusé à vie</label>
			</div>
				<div>
				<select class = "vie custom-select" style="display:none;" name="raison2">
				<option value="" selected>Selection..</option>
				<option value="Tricherie (copie de candidature)">Triche (Copie de candidature)</option>
                <option  value="Tricherie">Tricherie</option>
				<option  value="Manque de respect total pour le lecteur">Manque de respect total pour le lecteur</option>
				<option value="Mensonge et incohérence sur la candidature">Mensonge et incohérence sur la candidature</option>
				<option value="Vous avez quitté le serveur">Vous avez quitté le serveur</option>
				<option value="Double candidature">Double candidature</option>
           
				<select>
				<div class="invalid-feedback">
				Merci de sélectionner une raison.
				</div>	
				</div>
				<div class="custom-control custom-radio">
			    <input type="radio" value = "time" id ="tim"name="choice" class="custom-control-input bannir">
				<label class="custom-control-label" for="tim">Supprimer temps d'attente </label><i class="bx bx-help-circle icon-help" data-placement="bottom" title="Redonne l'accès au formulaire"></i>
				<div class="invalid-feedback">
			    Merci de cocher une case.
				</div>	
				</div>
				
					<input type = "hidden" value = "qs" name ="add">
			<!--<input type="radio" value = "time" name="choice"><label>Supprimer temps d'attente</label><br><br>-->
			<input type="submit" class="btn btn-info btn-fill" name="submit" value="Valider" >
			  </fieldset>
		</form>
		
<?php
}
?>