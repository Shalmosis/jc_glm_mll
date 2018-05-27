<?php 
$username; $password;

    if(isset($_POST['name']) && isset($_POST['password']))
    {
        $username = $_POST['name']; $password = $_POST['password'];
        $connexion = mysqli_connect('localhost', 'root', '', 'jc_glm_m2l');
        $req = "INSERT INTO users (name, password) VALUES ('$username', '$password');";
        $insert_user = mysqli_query($connexion, $req);
        
        header("location: nouveau_profil.php");
    }
?>

<form action="inscription" method="post">
    <input name="name" placeholder="name"/>
    <input name="password" placeholder="Password"/>
    <button type="submit" value="Valider" />Valider</button>
</form>