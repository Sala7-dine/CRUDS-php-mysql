<?php
        $localhost = "localhost";
        $username = "root";
        $password = "20212022";

        $connexion = mysqli_connect($localhost,$username,$password);
        mysqli_query($connexion,'use crud;'); 

?>