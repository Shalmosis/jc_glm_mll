<?php 
    if(isset($_POST['sport'])) {
        $sport = $_POST['sport'];
        $niveau = $_POST['niveau'];
        echo $niveau;

        $connexion = mysqli_connect("localhost", "root", "", "jc_glm_m2l");
        $req = "select users.name, usersports_a.userid, usersports_a.sport, usersports_a.niveau from users, usersports_a where users.id = usersports_a.userid and sport = '$sport' and niveau = '$niveau'";
        $resultat = mysqli_query($connexion,$req);

        print_r($resultat);
        
        while ($ligne = mysqli_fetch_assoc($resultat)) {
            echo "Il y a " .mysqli_num_rows($resultat) . "personnes qui répondent à votre recherche. <br />";
            echo $ligne['name'] . " " ."de niveau " . $ligne['niveau'] . " en " . $ligne['sport'];
        }
    }else

    {
?>
        <!-- AFFICHE LE FORMULAIRE SI LES DONNÉES N'ONT JAMAIS ÉTÉ ENVOYÉES -->
        <form method="post" action="search.php">
            <select name="sport">
                <option value="none" selected>N'importe lequel</option>
                <option value="Football">Football</option>
                <option value="Tennis">Tennis</option>
                <option value="Tennistable">Tennis de Table</option>
                <option value="Basket">Basket</option>
                <option value="Course">Course</option>
                <option value="Fitness">Fitness</option>
                <option value="Badminton">Badminton</option>
            </select>
            <label for="niveau"> De niveau </label>
            <select name="niveau">
                <option value="none" selected>Inexperimente</option>
                <option value="Débutant">Débutant</option>
                <option value="Intermédiaire">Intermédiaire</option>
                <option value="Expert">Expert</option>
                <option value="Challenger">Challenger</option>
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
