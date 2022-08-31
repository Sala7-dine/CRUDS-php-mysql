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
        <div class="head">
            <h1>CRUD PHP APPLICATION</h1>
        </div>
    </header>

    <div class="command">

<form action="ajoute.php" method="POST"><button class='btn' type="submit">Ajouté Produits</button></form>

<form action="chercher.php" method="post"><button class='btn' type="submit">Chercher Produits</button></form>

<form action="resetID.php" method="post"><button class='btn' type="submit">réinitialiser ID</button></form>

<form action="deleteall.php"><button class='btn' type="submit">Supprimer Tout</button></form>
</div>

    <div class="container">
    <?php

        include 'connexion.php' ; 

        $sql = "select * from user;";

        $result = $connexion->query($sql); 

        $table = "<table><thead><tr><th>ID</th>
        <th>Code</th>
        <th>Nom</th><th>Tva</th>
        <th>Quantité</th>
        <th colspan='2'>Opération</th>
        </tr><tr></thead>";
    
        $id;

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()){
            
            $id = $row["id"];
            $table .= "<tr><td>".$row["id"]."</td>".
            "<td>".$row["code"]."</td>". "<td>"
            .$row["nom"]."</td>"."<td>".$row["tva"]
            ."%</td>"."<td>".$row["qte"]."</td>"."<td>".
            " <form method='get'> <button type='button'><a class='a1' href='delete.php?deleteid=".$id."'>Delete</a></button></form>".

            "</td><td>".
            " <form method='get'> <button type='button'><a class='a2' href='update.php?updateid=".$id."'>Update</a></button></form>".
            "</td></tr>";
            }
        }

    
    $table .= "</table></div>" ; 
        echo $table ;

        $connexion->close();
    ?>


      
</body>
</html>