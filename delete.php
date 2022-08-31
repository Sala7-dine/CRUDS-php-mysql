<?php

    include 'connexion.php' ;

    $id = $_GET['deleteid'];
    $sql = "delete from user where id = $id;";
    $result = $connexion->query($sql); 
    header('location:index.php');




?>