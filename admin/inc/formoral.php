<?php $place = basename(getcwd()); 
if ($place == 'inc') {

header ('Location: ../');
} else {
?>
		<script>
		$(window).on('load', function() {
		var r = $(".refa"); 
		$('input[type="radio"]').click(function(){
		if($(this).attr("id")=="refus"){
		r.show('slow');
		r.attr("required", "");
      } else {
		r.hide('slow');
		r.removeAttr("required", "");
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
		<input type="radio" id="refus" value = "Refuser" name="oral" class="custom-control-input"> 
		
		<label class="custom-control-label" for="refus"> Refuser</label><br> 
		<div class="invalid-feedback" style="width:250px;">
    Merci de cochez une case
  </div>
		</div>
		

		<input type="text" class="form-control refa"  name="raisonoral" style="width:150px;height:30px;margin-left: 90px;margin-top: -30px; display:none;"> 
		 <div class="invalid-feedback">
       Merci d'ajouter une raison. 
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
