<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

   
<?php


include 'php/navbar.php';
$bdd = new PDO('mysql:host=localhost;dbname=were-app;', 'root','');
if(isset($_POST['envoi'])){
    if(!empty($_POST['trajet']) AND !empty($_POST['contenu']) AND !empty($_POST['prix'])
    ){
        $trajet=$_POST["trajet"];
        $contenu=($_POST["contenu"]);
        $prix=$_POST["prix"];
        $inserTrajet = $bdd->prepare('INSERT INTO trip(trajet,contenu,prix)VALUES(?, ?, ?)');
        $inserTrajet->execute (array($trajet, $contenu, $prix,));
    }else{
        echo "veuillez complèter tout les champs";
    }
}

?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center fw-bold mt-5 mb-4 ">Bienvenue sur la page d’inscription</h3>
            <div class="card mt-5 shadow">
                <div class="card-body">
                    <form method="POST" action="">
                        

                        <div class=" mb-3">
                            <label for="trajet" class="form-label ">Traet</label>
                                <input id="trajet" type="text" class="form-control " name="trajet" required autocomplete="last_name" autofocus placeholder="Veuillez entrer votre nom">

                              
                        </div>
                        <div class="mb-3">
                            <label for="InputFirstName" class="form-label">contenu</label>
                            <input id="contenu" type="text" class="form-control " name="contenu"  required autocomplete="first_name" autofocus placeholder="Veuillez entrer votre prénom">
                           
                        </div>

                        <div class="mb-3">
                               <label for="prix" class="form-label ">Prix</label>
                                <input id="prix" type="text" class="form-control " name="prix"  required autocomplete="email" placeholder="Veuillez entrer votre mail">

                              
                        </div>
                      
                        <div class="me-auto">
                            <div class="modal-footer">
                               <a href=""> <button type="submit" class="btn btn-primary boutton ms-4" name="envoi">S'INSCRIRE</button></a>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
include 'php/footer.php';
?>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
