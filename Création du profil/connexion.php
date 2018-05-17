<?php
$username = 'user'; $userpass = 'lambda';
$name; $password;
    if(isset($_POST['password']) && isset($_POST['name']))
    {
        $name = $_POST['name']; $password = $_POST['password'];
        $connexion = mysqli_connect('localhost', 'root', '', 'jc_glm_m2l');
        $req = "select * from users where name ='$name' and password = '$password'";
        $is_user = mysqli_query($connexion, $req);

        if(mysqli_num_rows($is_user) > 0)
        {
            session_start();
            $_SESSION['ok'] = "ok";
            $_SESSION['name'] = $username;

            header("Location: profil.php");
        }
        
    }
?>
<form action="connexion.php" method="post">
    <input name="name" placeholder="name"/>
    <input name="password" placeholder="Password"/>
    <button type="submit" value="Valider" />Valider</button>
</form>