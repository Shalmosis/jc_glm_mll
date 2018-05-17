<?php

    //permet de limiter que les utilisateurs attaquent le site en rentrant des commentaire dans les formulaires
    function test_input($string) {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }


    function insert_user($connect, $name, $password, $email, $admin)
    {
        $insert_new_user = mysqli_query($connect, "INSERT INTO users (name, password, email, admin)
            VALUES ('$name', '$password', '$email', '$admin');");
    }

?>