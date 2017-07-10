<?php
require_once 'anti_hack.php';


foreach ($table as $key => $value) {

	$kids_number=$value;



}

if($value==null || $value ==0 ){
	echo "Vous n'êtes point un reproducteur, passez à l'étape suivante";
}

$form_kids='
			<p>
           		<label for="name_kid">Nom Enfant :</label>
            	<input type="text" name="name_kid" />
        	</p>
        	<p>
            	<label for="datebirth_kid">Date de Naissance :</label>
            	<input type="date" name="datebirth_kid" />
        	</p>';



?>

<html>
	
	<form method="post" action="target.php">
		<?php 


			for ($i=0; $i < $value; $i++) {
			$counting_kid=1;
			

			echo $form_kids; 
			
			}

		?>
	    <p>
           <input type="submit" name="submit03" value="suivant">
        </p>
	</form>





</html>
