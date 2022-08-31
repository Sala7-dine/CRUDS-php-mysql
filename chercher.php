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

    <div class="cher">
    <form action="" method="post"><input type="text" class="input1" placeholder="Saise Le Nom" name="ch">
        <input type="submit" class='btn1'  value="Chercher">
    </form>
    </div>
   
<div class="container">
<?php 

    include 'connexion.php';

    $nm1 ; 
        if(!empty($_POST['ch']))
        {
            $nm1 = $_POST['ch'];
            
            $sql1 = "select * from user where nom = '$nm1';";
            
            $result1 = $connexion->query($sql1); 
        
        $table1 = "<table><thead><tr><th>ID</th>
        <th>Code</th>
        <th>Nom</th><th>Tva</th>
        <th>Quantité</th>
        <th>Delete</th>
        <th>Update</th>
        </tr><tr></thead>";
    
        $id1;

        if ($result1->num_rows > 0) {

            while($row = $result1->fetch_assoc()){
            
            $id1 = $row["id"];
            $table1 .= "<tr><td>".$row["id"]."</td>".
            "<td>".$row["code"]."</td>". "<td>"
            .$row["nom"]."</td>"."<td>".$row["tva"]
            ."%</td>"."<td>".$row["qte"]."</td>"."<td>".
            " <form method='get'> <button type='button'><a class='a1' href='delete.php?deleteid=".$id1."'>Delete</a></button></form>".
            "</td><td>".
            " <form method='get'> <button type='button'><a class='a2' href='update.php?updateid=".$id1."'>Update</a></button></form>".
            "</td></tr>";
            }
        }

        $table1 .= "</table></div>";
        echo $table1 ;
        }

        $connexion->close();
       
?>

</body>
</html>