<?php

    include 'connexion.php' ; 

    $sql = "delete from user;";
    $result = $connexion->query($sql); 
    header('location:index.php');




?>