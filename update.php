<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
</head>
<body>

        <header>
                <form action="index.php"><button class="btn1 btn2">Return</button></form>
                <div class="head">
                        <h1>CRUD PHP APPLICATION</h1>
                </div>
        </header>


        <fieldset>
                <legend>Modifier Produit</legend>

                <div class="">

                        <form action="" method="post" >
                        <input type="text" class="input12" name="code" id="code" placeholder="Code">
                        <input type="text" class="input12" name="nom" id="nom" placeholder="Nom">
                        <input type="number" class="input12" name="tva" id="tva" placeholder="Tva">
                        <input type="number" class="input12" name="qte" id="qte" placeholder="Quantité">
                        <input type="submit" class="btn1 btn3" name="btn" id="btn" value="Update">
                        </form>

                </div>
        </fieldset>
       
</body>
</html>

<?php
        include 'connexion.php';

        if(!empty($_GET['updateid'])){

                $id = $_GET['updateid'];
        } 
        
        if(!empty($_POST['code']) && !empty($_POST['nom']) && !empty($_POST['tva']) && !empty($_POST['qte']))
        {
            $code = $_POST['code'];
            $nom = $_POST['nom'];
            $tva = $_POST['tva'];
            $qte = $_POST['qte'];

            $query = "UPDATE user SET code = '$code' ,nom = '$nom' ,tva = $tva ,qte = $qte where id = $id;";
        
            mysqli_query($connexion,$query);

            header('location:index.php');

        }

        $connexion->close();


?>