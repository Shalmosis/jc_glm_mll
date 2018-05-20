<?php
if(isset($_POST['sport']))
{
    print_r($_POST['sport']);
    $tableau = $_POST['sport'];
    $temp = 0;
    
    while($temp < count($tableau))
    {
        echo $tableau[$temp];
        $nom = $tableau[$temp];
        /*
         $connexion = mysqli_connect("localhost", "root", "", "jc_glm_m2l");
        $reqsport = "insert into users_sports_a ('id', 'userid', 'sport', 'niveau') values ('id', 'userid', $tableau[$temp], 'niveau') ";
        $ajoutsport = mysqli_query($connexion, $req);
        */
        $temp++;
        $niveau = $_POST["niveau$nom"];
        echo $niveau;
    }
}
    $connexion = mysqli_connect("localhost", "root", "", "jc_glm_m2l");
    $req = "select * from sports";
    $resultat = mysqli_query($connexion, $req);
    $req2 = "select * from niveaux";
    $resultat2 = mysqli_query($connexion, $req2);
    $ligne; $row2;

?>
<form action="nouveau_profil.php" method="post">
    <label for="description">Une courte description de vous ? (255 caractères maximum)</label><br />
       <textarea name="description" id="description" placeholder="255 caractères maximum"></textarea><br /><br />

       <label for="description">Votre date de naissance</label><br /><input type="date" /><br /><br />

       <label for="sport">Quel sport faites-vous?</label><br />
<?php 
    while($ligne = mysqli_fetch_assoc($resultat))
    {
        echo "<label for='" . $ligne['id'] . "'>". $ligne['libelle'] . "</label><input type='checkbox' id='" . $ligne['id'] . "' name='sport[]' value='".$ligne['libelle'] ."'>";
?>
<?php      
        /* while($row2 = mysqli_fetch_array($resultat2))
        {
            echo "<label for='" . $row2[0] . "'>". $row2[1] . "</label><input type='checkbox' id='" . $row2[0] . "' name='niveau' value='".$row2[1] ."'>";
        }
        
        $row2 = array ("dump" => "dump");
        var_dump($row2);
        reset($row2);
        mysql_data_seek($resultat2, 0);
        var_dump($row2);
        echo "<br/>"; */
?>
        <select name="niveau<?php echo $ligne['libelle'];?>" id="niveau<?php echo $ligne['libelle'];?>">
            <option value="none">Inexpérimenté(e)</option>
           <option value="Débutant">Débutant(e)</option>
           <option value="Intermediaire">Intermédiaire</option>
           <option value="Expert">Expert(e)</option>
           <option value="Challenger">Challenger</option>
       </select><br />

<?php    
    }
?>
    <button type="submit" value="Valider" />Valider</button>
</form>