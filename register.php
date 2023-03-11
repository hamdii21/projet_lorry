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

session_start();

include 'php/navbar.php';
$bdd = new PDO('mysql:host=localhost;dbname=were-app;', 'root','');
if(isset($_POST['envoi'])){
    if(!empty($_POST['last_name']) AND !empty($_POST['first_name']) AND !empty($_POST['email'])
    AND !empty($_POST['phone_number']) AND !empty($_POST['pasword']) AND !empty($_POST['password_confirmation'])
    ){
        $nom=$_POST["last_name"];
        $prenom=($_POST["first_name"]);
        $email=$_POST["email"];
        $numero=($_POST["phone_number"]);
        $pasword=sha1($_POST["pasword"]);
        $confirmation=sha1($_POST["password_confirmation"]);
        $insertUser = $bdd->prepare('INSERT INTO users(nom,prenom,email,numero,pasword,confirm_password)VALUES(?, ?, ?, ?, ?, ?)');
        $insertUser->execute (array( $nom, $prenom, $email,$numero,$pasword,  $confirmation));
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
                            <label for="last_name" class="form-label ">Nom</label>
                                <input id="last_name" type="text" class="form-control " name="last_name" required autocomplete="last_name" autofocus placeholder="Veuillez entrer votre nom">

                              
                        </div>
                        <div class="mb-3">
                            <label for="InputFirstName" class="form-label">Prénom</label>
                            <input id="first_name" type="text" class="form-control " name="first_name"  required autocomplete="first_name" autofocus placeholder="Veuillez entrer votre prénom">
                           
                        </div>

                        <div class="mb-3">
                               <label for="email" class="form-label ">Email</label>
                                <input id="email" type="email" class="form-control " name="email"  required autocomplete="email" placeholder="Veuillez entrer votre mail">

                              
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Numéro</label>
                            <input id="phone_number" type="number" class="form-control " name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="Veuillez entrer le numéro">
                           
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label ">Password</label>
                                <input id="password" type="password" class="form-control " name="pasword" required autocomplete="new-password" placeholder="Veuillez entrer le mot de passe " >

                              
                        </div>

                        <div class=" mb-3">
                            <label for="password-confirm" class="form-label ">Confirm password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Veuillez confirmez le mot de passe " >
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