<?php
require_once 'anti_hack.php';
?>

<html>

	<form method="post" action="target.php">
		<h2>Situation du conjoint</h2>

	    <p>
            <label for="name_partner">Nom:</label>
            <input type="text" name="name_partner" />
        </p>
        <p>
            <label for="lastname_partner">Prénom :</label>
            <input type="text" name="lastname_partner" />
        </p>
        <p>
            <label for="age_partner">Age :</label>
            <input type="text" name="age_partner" />
        </p>
        <p>
            <label for="datebirth_partner">Date de Naissance :</label>
            <input type="date" name="datebirth_partner" />
        </p>
        <p>
            <label for="job_partner">Profession :</label>
            <input type="text" name="job_partner" />
        </p>
        <p>
            <label for="salary_partner">Revenus :</label>
            <input type="text" name="salary_partner" />
        </p>
        <p>
            <label for="kids_number">Nombre d'enfants:</label>
            <input type="text" name="kids_number" />
        </p>
        <p>
           <input type="submit" name="submit02" value="suivant">
        </p>
    </form>

</html>

