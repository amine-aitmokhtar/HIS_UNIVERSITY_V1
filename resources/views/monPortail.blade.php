<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/monPortail.css') }}">


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>monPortail</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/HIS_LOGO_TITLE.png') }}" alt="Logo de l'université">
    </a>

    <h1 class="mx-auto"><span class="font-weight-normal">| mon</span><span class="font-weight-bold">Portail</span></h1>
  </nav>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-5">
          <span class="regular-text">Bienvenue sur </span>
          <span class="bold-text">monPortail</span>
        </h2>
        <p class="sous_titre mb-5">L’environnement numérique d’études de <br> <span class="bold-text">l'université HIS</span> </p>
        <hr class="my-4">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>monPortail offre un accès centralisé à différents services <br>la demande de stage externe, la consultation <br> des relevés de notes, délibérations et la demande <br> des documents administratifs.</p>

        <div>
            <button id="AccederPortailBtn" class="btn btn-primary btn-lg mb-4" style="display: inline-block;">Accéder à monPortail</button>
        </div>


        <p class="bold-text">Vous n'avez pas de compte et vous voulez déposer <br> une demande d'admission?</p>

        <div>
            <button id="CreerUnCompte" class="btn btn-outline-primary btn-outline btn-lg mb-4">Créer un compte</button>
        </div>



        <p><a href="#" class="link-help">Aide pour la connexion</a></p>

        <div class="row">
          <div class="col-md-12">
            <div class="image-container">
                <img src="{{ asset('images/stock_laptob_phone.jpg') }}" alt="Description de l'image">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="{{ asset('js/monPortail.js') }}"></script>
</body>
</html>
