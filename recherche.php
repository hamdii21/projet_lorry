<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center fw-bold mt-5 mb-4 ">Bienvenue sur la page de recherche</h3>
            <div class="card mt-5 shadow">
                <div class="card-body">
                    <form method="POST" action="">
                            <label for="recherche" class="form-label ">recherche</label>
                                <input  type="text" class="form-control " name="recherche">
                                <input  type="submit" class="form-control " name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


  
<?php

$bdd = new PDO('mysql:host=localhost;dbname=were-app;', 'root','');
if(isset($_POST["submit"])){
   $str=$_POST["recherche"];
   $sth=$bdd->prepare("SELECT * FROM `trip` WHERE trajet='$str'");

   $sth->setFetchMode(PDO::FETCH_OBJ);
   $sth->execute();

   if($row=$sth->fetch())
   {
    
     ?>
     <br><br><br>
     <table border>
     <tr>
        <th>trajet</th>
        <th>contenu</th>
        <th>prix</th>
     </tr>
     <tr>
        <td><?php echo $row->trajet; ?></td>
        <td><?php echo $row->contenu; ?></td>
        <td><?php echo $row->prix; ?></td>
     </tr>
     </table>
     <?php 
   }
   
   else{
    echo"trajet n'existe pas";
   }
}

?>


</body>
</html>