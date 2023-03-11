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



<header class="acceuil-bg-image d-block mx-lg-auto img-fluid">
    <div class="container-fluid  h-100">
        <div class="row h-100 align-items-center ">
            <div class="col-5 about-text mx-auto">
                <div class="text-white display-6 fw-bold mb-5 tickets">ACHÈTEZ VOS TICKETS DE BUS DÉPUIS
                <br> VOTRE CONFORT VIA NOTRE PLATE-FORME</div>
                <a href="recherche.php"><button type="button"  class="btn btn-outline-success boutton text-white display-4 fw-bold">Récherchez vos trajets</button></a>
            </div>
        </div>
    </div>
</header>
<div class="main">
    <div class="container intro-content mt-5">
      <div class="row">
        <div class="col-md-6 align-self-center">
        <img class = 'image-un d-block mx-lg-auto img-fluid'src="assets/img/femme.webp" alt="">
        </div><!-- /.col-md-6 -->
        <div class="col-md-6 ml-auto mt-3">
          <h2 class="mb-4">ACHAT DE TICKET DE BUS EN LIGNE  FACILE</h2>
            <div class="card-body text-dark">
             <p>Achetez tous les tickets de bus que vous avez l'habitude d'acheter dans les guichets des agences dans notre plateforme accessible </p>
             <a href="{{ route('register') }}"><button type="button"  class="btn btn-outline-success boutton text-white display-4 fw-bold">Réservez Maintenant</button></a>
          </div>
        </div><!-- /.col-md-6 -->
      </div>
   </div>


    <div class="container-fluid bg-color-cover h-50 mt-5 py-5">
          <div class="row h-100 align-items-center">
              <div class="col-12 text-center">
                  <h3 class=" display-7 fw-bold mb-2">Une plate-forme de réservation des tickets intelligente et éfficace </h3>
                  <div class= "text-center" >Grâce à l’intelligence artificielle intégrée et au système de correspondance basé sur de nombreuses données,  est le  </div>
                  <div class="text-center">spécialiste qui aide les utilisateurs à trouver rapidement les bus correspondants</div>
              </div>
          </div>
    </div>


      <section id ="team">
          <div class="container pt-5 pb-1 text-center">
              <div class="row">
                  <h3 class ="mb-4" style ="color:#373AB9">Planifiez votre déplacement <br> en seulement 4 étapes.</h3>
              </div>
              <div class="row mb-5">
                 <div class="col-lg-3 col-md-6">
                     <div class="card carte shadow mt-3">
                         <div class="card-body">
                             <img src="assets/img/Bus Width.png" alt="" classe ="image-fluid rounded circle w-50 mb-3">
                             <h3>1.</h3>
                             <p>Inscrivez-vous e remplissant vos coordonnées</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="card carte shadow mt-3">
                         <div class="card-body">
                             <img src="assets/img/info.png" alt="" classe ="image-fluid rounded circle w-50 mb-3">
                             <h3>2.</h3>
                             <p>Cherchez les trajets de voyage qui vous covient</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="card carte shadow mt-3">
                         <div class="card-body">
                             <img src="assets/img/money.png" alt="" classe ="image-fluid rounded circle w-50 mb-3">
                             <h3>3.</h3>
                             <p> Reservez en remplissant les inforrmations demandés</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="card carte shadow mt-3">
                         <div class="card-body">
                             <img src="assets/img/money.png" alt="" classe ="image-fluid rounded circle w-50 mb-3">
                             <h3>4.</h3>
                             <p> Vérifiez vos inforrmations  et télécharger le ticket</p>
                         </div>
                     </div>
                 </div>
              </div>

          </div>
      </section>

    <div class="container-fluid bg-color-cover-bleu h-50 mt-5 py-5">
          <div class="row h-100 align-items-center">
              <div class="col-12 text-center">
                  <h3 class=" display-7 fw-bold mb-2 text-white">Vous recherchez le meilleur prix associé à une qualité de service élevée ? </h3>
                  <div class= "text-center text-white" >Trouver un service de haute qualité au meilleur prix, c’est la raison pour laquelle notre </div>
                  <div class="text-center text-white">plate-forme est incomparable.</div>
              </div>
          </div>
      </div>
  </div>
  <div class="container intro-content mt-5">
      <div class="row">
          <div class="col-md-6 col-ms-3 align-self-center">
            <img class = 'image-deux d-block mx-lg-auto img-fluid'src="assets/img/voiture.jpg" alt="">
            <div class="text-center">
                  <button type="submit" class="btn btn-ligth btn-block btn-lg bouton mt-3">J’ai bésoin d’un bus </button>
            </div>
          </div><!-- /.col-md-6 -->
          <div class="col-md-6 col-ms-3 ml-auto mt-3">
                <img class = 'image-deux d-block mx-lg-auto img-fluid'src="assets/img/imge-actu-1.jpeg" alt="">
                <div class="text-center">
                   <button type="submit" class="btn btn-ligth btn-block btn-lg bouton mt-3">J’ai des bus </button>
                </div>
          </div>
      </div><!-- /.col-md-6 -->
  </div>
</div>



<?php
include 'php/footer.php';
?>
 
 <script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>