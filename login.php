
<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=were-app', 'root','');
//include 'connexion.php';
//include 'util.php';
//init_php_session();
if(isset($_POST['envoi'])){
    if(!empty($_POST['email']) AND !empty($_POST['pasword'])){

        $email=$_POST["email"];
        $pasword=sha1($_POST["pasword"]);
        
        $recupUser =$bdd->prepare('SELECT * FROM users WHERE email=? AND pasword=?');
        $recupUser->execute(array($email,$pasword));

         if($recupUser->rowCount() > 0){

        $_SESSION['email']=$email;
        $_SESSION['pasword']=$pasword;

        $_SESSION['id']=$recupUser->fetch()['id'];
        header('Location:index.php');
        }else{
          echo"votre email ou mot de passe incorrect";
        }

    }else{
       echo "veuillez saisair tous les champ";
    }
}



/*

if(isset($_POST['email']) && !empty($_POT['email']) && isset($_POST['pasword']) && !empty($_POT['pasword']))
{


    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $email=$_POST["email"];
    $password=$_POST["pasword"];

$sql= 'SELECT * FROM users WHERE email = :email';
$fields =[ 'email' =>  $email];

$req = connexion ::getInstance()->request($sql,$fields);

echo '<pre>';
    print_r($req);
    echo '</pre>';

}*/


?>


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
include 'php/navbar.php'
?>


<div class="container">
    <div class="row card text-white w-50 mx-auto mt-5 mb-5" style="background-color:  #373AB9 ">
        <h4 class="card-header">Connectez-vous</h4>
        <div class="card-body">
            <form method="POST" action="">
                <div class="mb-3">
                    <input id="email" type="email" class="form-control " name="email" placeholder="veuillez entrez votre email" required autocomplete="email" autofocus autocomplete="off">
                  
                </div>
                <div class="mb-3">
                    <input id="password" type="password" class="form-control " name="pasword" required autocomplete="current-password" placeholder="veuillez entrez le password" autocomplete="off">
                  
                </div>
                <div class=" mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" >

                        <label class="form-check-label" for="remember">
                                Remember Me
                        </label>
                    </div>
                </div>
                <div class=" mb-0">
                    <button type="submit" class="btn btn-secondary" name="envoi">Connexion</button>
                  </button>

                  
                </div>
            </form>
        </div>
    </div>
</div>



<?php
include 'php/footer.php';
?>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>