<?php
require_once 'anti_hack.php';


$table=$_SESSION['supertableau04'];

foreach ($table as $key => $value) {

    $number_credit=$value;



}

if($number_credit==null || $number_credit ==0 ){
    echo "Tu n'as pas de crédit ! Tu es un modèle de vertu !";
}

$form_credit='
            <p>
                <h3>Emprunt !</h3>
                <label for="nature_credit">Nature de l\'emprunt :</label>
                <input type="text" name="nature_credit" />
            </p>
            <p>
                <label for="monthly_instalment">Mensualités:</label>
                <input type="text" name="monthly_instalment" />
            </p>
            <p>
                <label for="end_credit">Fin de l\'emprunt :</label>
                <input type="date" name="end_credit" />
            </p>
            <p>
                <label for="percent_credit">Taux :</label>
                <input type="text" name="percent_credit" />
            </p>
            <p>
                <label for="money_owed">Mensualités:</label>
                <input type="text" name="money_owed" />
            </p>
            <p>
                <label for="money_borrowed">Somme empruntée :</label>
                <input type="text" name="money_borrowed" />
            </p>';

?>


<html>
    
    <form method="post" action="target.php">
        <?php 


            for ($i=0; $i < $value; $i++) {            

            echo $form_credit; 
            
            }

        ?>
        <p>
           <input type="submit" name="submit05" value="suivant">
        </p>
    </form>





</html>
