<?php 
    if(isset($_POST)) {
        echo "Bonjour";
    }else

    {
?>
        <!-- AFFICHE LE FORMULAIRE SI LES DONNÉES N'ONT JAMAIS ÉTÉ ENVOYÉES -->
        <form method="post" action="search.php">
            <select name="sport">
                <option value="none" selected>N'importe lequel</option>
                <option value="football">Football</option>
                <option value="tennis">Tennis</option>
                <option value="tennistable">Tennis de Table</option>
                <option value="basket">Basket</option>
                <option value="course">Course</option>
                <option value="fitness">Fitness</option>
                <option value="badminton">Badminton</option>
            </select>
            <label for="niveau"> De niveau </label>
            <select name="sport">
                <option value="none" selected>Inexperimente</option>
                <option value="debutant">Debutant</option>
                <option value="intermediaire">Intermediaire</option>
                <option value="expert">Expert</option>
                <option value="challenger">Challenger</option>
            </select>
            <label for="debut"> Heure de debut </label>
            <select name="debut">
                <option value="01" selected>01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
            </select>
            <label for="fin"> Heure de fin</label>
            <select name="fin">
                <option value="01" selected>01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
            </select>
            <button type="submit" value="valider">Valider</button>
        </form>

<?php 
    }   
?>
