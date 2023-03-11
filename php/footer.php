<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet-soutenance</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
  <body>



        <div class="footer" id ="contact">
            <div class="container-fluid bg-color-cover-bleue h-50 mt-5 py-5">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                          <h4 class= "mb-3">À DÉCOUVRIR</h4>
                          <p>Destination  Tchamba</p>
                          <p>Destination Lomé</p>
                          <p>Destination sokodé</p>
                          <p>Destination kara</p>
                        </div>
                        <div class="col-md-4 ">
                          <h4 class= "mb-3">TRAJETS LES PLUS DEMANDÉS</h4>
                          <p>Tickets Tchamba-Lomé</p>
                          <p>Tickets  Lomé-Tchamba</p>
                          <p>Tickets  Sokodé-Lomé</p>
                          <p>Tickets  Lomé-Sokodé</p>
                          <p>Tickets Kara-Lomé</p>
                          <p>Tickets Lomé-Kara</p>
                        </div>
                        <div class="col-md-4">
                          <h4 class= "mb-3">CONTACTEZ-NOUS</h4>
                        <form action="{{route('store')}}" method="POST">

                               

                            <div class="form-group">
                                <input id="name" type="text" class="form-control " name="nom"  required autocomplete="name" autofocus  placeholder="Veuillez entrer votre nom">
                                
                                 
                            </div>
                            <div class="form-group mt-3  ">
                                <input id="email" type="email" class="form-control" name="email"  required autocomplete="email"  placeholder="Veuillez entrer votre email">
                                
                                  
                                
                            </div>
                            <div class="form-group mt-3 shadow">
                            <textarea class="form-control " id="exampleFormControlTextarea1" name="message" rows="2"  placeholder="Veuillez entrer votre message"></textarea>
                                
                               
                                
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-success btn-block btn-lg cherchez-un mt-3">Envoyer</button>
                            </div>
                      </form>
                    </div>
                    <p class='text-center text-white mt-4'>© Copyright 2022 </p>
                  </div>
              </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
