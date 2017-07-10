<?php
require_once 'anti_hack.php';
?>

<html>

	<form method="post" action="target.php">
		<h2>Fiscalité</h2>

	    <p>
            <label for="taxes_value">Impots payés :</label>
            <input type="text" name="taxes_value" />
        </p>
        <p>
            Faites-vous vos déclarations d'impots ? : 
            <input type="radio" name="declaration"><label for="declaration">Oui</label>
            <input type="radio" name="declaration"><label for="declaration">Non</label>
        </p>
        <p>
            Si oui, quel type de déduction : 
            <input type="radio" name="declaration_type" value="option01"><label for="declaration_type">EL</label>
            <input type="radio" name="declaration_type" value="option02"><label for="declaration_type">A110</label>
            <input type="radio" name="declaration_type" value="option03"><label for="declaration_type">A111</label>
            <input type="radio" name="declaration_type" value="option04"><label for="declaration_type">111B</label>
            <input type="radio" name="declaration_type" value="option05"><label for="declaration_type">SRD</label>
            <input type="radio" name="declaration_type" value="option06"><label for="declaration_type">Je déduis pas !</label>
        </p>
        <p>
            Si Non, ça vous dit : 
            <input type="radio" name="wouldyoulike"><label for="wouldyoulike">Oui</label>
            <input type="radio" name="wouldyoulike"><label for="wouldyoulike">non</label>
            <input type="radio" name="wouldyoulike"><label for="wouldyoulike">Je le fais déjà t'ai-je dit !</label>

        <p>
            Et votre compagne/compagnon, il déclare du fric ? : 
            <input type="radio" name="declaration_partner"><label for="declaration_partner">Oui</label>
            <input type="radio" name="declaration_partner"><label for="declaration_partner">Non</label>
        </p>
        <p>
            Si oui, quel type de déduction qu'il fait dites voir ?: 
            <input type="radio" name="declaration_type_partner"><label for="declaration_type_partner">EL</label>
            <input type="radio" name="declaration_type_partner"><label for="declaration_type_partner">A110</label>
            <input type="radio" name="declaration_type_partner"><label for="declaration_type_partner">A111</label>
            <input type="radio" name="declaration_type_partner"><label for="declaration_type_partner">111B</label>
            <input type="radio" name="declaration_type_partner"><label for="declaration_type_partner">SRD</label>
            <input type="radio" name="declaration_type_partner"><label for="declaration_type_partner">Il déduit pas</label>
        </p>
        <p>
            Si Non, ça lui dit 8) : 
            <input type="radio" name="wouldyoulike_partner"><label for="wouldyoulike_partner">Oui</label>
            <input type="radio" name="wouldyoulike_partner"><label for="wouldyoulike_partner">non</label>
            <input type="radio" name="wouldyoulike_partner"><label for="wouldyoulike_partner">Il le fait déjà t'ai-je dit !</label>
        </p>
        </p>
        <p>
        	<h2>Rubrique emprunts et crédits</h2>
        	Et sinon vous avez combien de crédits ?
        	<input type="text" name="credit_number">
        </p>
        <p>
           <input type="submit" name="submit04" value="suivant">
        </p>
    </form>

</html>

