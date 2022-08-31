<?php 

    include 'connexion.php';

    $sqlreset = "ALTER TABLE user AUTO_INCREMENT = 1";
    mysqli_query($connexion , $sqlreset);
    



    header('location:index.php');
    $connexion->close();



?>