<!DOCTYPE html>

<html>
  <head>
    <title>HIS</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />


  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img
            class="logo"
            src="../images/HIS_LOGO_only.png"
            alt="Logo de l'université"
        /></a>

        <a class="navbar-brand" href="#">
            <img class="title" src="{{ asset('images/HIS_TITLE_only.png') }}" alt="Titre de l'image">
        </a>


        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown active">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                ADMISSION
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#"
                    >Lycéens : entrer à l'université</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Candidature et inscription en premier cycle</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#">Candidater à nos masters</a>
                </li>
                <li><a class="dropdown-item" href="#">Doctorat</a></li>
                <li>
                  <a class="dropdown-item" href="#">Droits d'inscription</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Bourses et aides financières</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#">Aménagement d'études</a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown active">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                FORMATION
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">Choisir sa formation</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Formation continue - Validation des acquis</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#">Formation en alternance</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Réussite et devenir des diplômés</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Orientation et insertion professionnelle</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Internationalisation : Langues et Cultures</a
                  >
                </li>
                <li><a class="dropdown-item" href="#">Summer schools</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown active">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >
                RECHERCHE
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#"
                    >Thématiques et structures</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Laboratoires et équipements</a
                  >
                </li>
                <li><a class="dropdown-item" href="#">Doctorat et HDR</a></li>
                <li> <a class="dropdown-item" href="#">Services aux chercheurs</a> </li>
                <li>
                  <a class="dropdown-item" href="#">Programmes de recherche</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Agenda de la recherche</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Portraits de chercheurs</a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown active">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                COLLABORATIONS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">International</a></li>
                <li><a class="dropdown-item" href="#">Entreprises</a></li>
                <li>
                  <a class="dropdown-item" href="#">Transfert de technologie</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Expertises et compétences</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#">Recruter nos étudiants</a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown active">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                L'UNIVERSITÉ
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Fondateur de HIS</a></li>
                <li><a class="dropdown-item" href="#">Campus Tour</a></li>
                <li>
                  <a class="dropdown-item" href="#">Testimonials & Alumni</a>
                </li>
                <li><a class="dropdown-item" href="#">Gouvernance</a></li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Rejoignez notre newsletter</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#">Media et communication</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >University Gallerie photo</a
                  >
                </li>
                <li><a class="dropdown-item" href="#">FAQ</a></li>
              </ul>
            </li>
          </ul>
          <button id="monPortailBtn" type="button" class="btn btn-primary">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="22"
              height="25"
              fill="currentColor"
              class="bi bi-box-arrow-in-right"
              viewBox="0 1 18 18"
            >
              <path
                fill-rule="evenodd"
                d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"
              />
              <path
                fill-rule="evenodd"
                d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"
              />
            </svg>
            MonPortail
          </button>

        </div>
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="../images/University-Picture.webp"
            class="d-block w-100"
            alt="Description de l'image"
          />
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p>
                Some representative placeholder content for the first slide of
                the carousel.
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="#">Sign up today</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../images/His-university-Reception-Hall.webp"
            class="d-block w-100"
            alt="Description de l'image"
          />
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>
                Some representative placeholder content for the second slide of
                the carousel.
              </p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../images/Our-s-teaching-staff-.webp"
            class="d-block w-100"
            alt="Description de l'image"
          />
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>
                Some representative placeholder content for the third slide of
                this carousel.
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="#">Browse gallery</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../images/Student-Picture.webp"
            class="d-block w-100"
            alt="Description de l'image"
          />
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>
                Some representative placeholder content for the third slide of
                this carousel.
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="#">Browse gallery</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container-fluid admission-container">
      <div class="row admission-row">
        <div class="col-md-12">
          <h2 class="text-center">ADMISSION</h2>
          <p class="text-center lead mb-5">
            La réalisation de votre projet d’études commence ici.
          </p>
        </div>
      </div>

      <div class="row steps-row">
        <div class="col-md-3 step-col">
          <div class="card h-100">
            <div class="card-body text-center">
              <h3>1</h3>
              <hr class="my-4" />
              <h4 class="card-title">
                Trouvez <br />
                votre programme
              </h4>
              <p class="card-text">
                Explorez nos programmes de licence et de master.
              </p>
              <a href="#" class="btn btn-primary">Découvrir</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 step-col">
          <div class="card h-100">
            <div class="card-body text-center">
              <h3>2</h3>
              <hr class="my-4" />
              <h4 class="card-title">
                Préparez <br />
                votre dossier
              </h4>
              <p class="card-text">
                Découvrez les exigences et les détails du processus d'admission.
              </p>
              <a href="#" class="btn btn-primary">Consulter </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 step-col">
          <div class="card h-100">
            <div class="card-body text-center">
              <h3>3</h3>
              <hr class="my-4" />
              <h4 class="card-title">
                Déposez <br />
                votre demande
              </h4>
              <p class="card-text">
                Remplissez et soumettez votre demande d'admission en ligne.
              </p>
              <a href="#" class="btn btn-primary">Commencer</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 step-col">
          <div class="card h-100">
            <div class="card-body text-center">
              <h3>4</h3>
              <hr class="my-4" />
              <h4 class="card-title">
                Faites le suivi de <br />
                votre demande
              </h4>
              <p class="card-text">
                Suivez votre demande pour connaître son état d'avancement.
              </p>
              <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-5 py-5 z-depth-1">



    <div class="container mt-5">


    <!--Section: Content-->
    <section class="dark-grey-text mb-5">

      <style>
        .map-container-section {
          overflow:hidden;
          padding-bottom:56.25%;
          position:relative;
          height:0;
        }
        .map-container-section iframe {
          left:0;
          top:0;
          height:100%;
          width:100%;
          position:absolute;
        }
      </style>

      <!-- Section heading -->
      <h3 class="font-weight-bold text-center mb-4">Contactez-nous</h3>
      <!-- Section description -->
      <p class="text-center w-responsive mx-auto pb-5">Entrez en contact
        ou demandez des informations et visitez le campus.</p>

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">

          <!-- Form with header -->
          <div class="card">
            <div class="card-body">
              <!-- Header -->
              <div class="form-header blue accent-1">
                <h3 class="mt-2"><i class="fas fa-envelope"></i> Ecrire à nous :</h3>
              </div>
              <p class="dark-grey-text">ENTREZ VOS INFORMATIONS
                ET NOUS REVIENDRONS VERS VOUS.</p>
              <!-- Body -->
              <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form-name" class="form-control">
                <label for="form-name">Votre nom</label>
              </div>
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="text" id="form-email" class="form-control">
                <label for="form-email">Votre e-mail</label>
              </div>
              <div class="md-form">
                <i class="fas fa-tag prefix grey-text"></i>
                <input type="text" id="form-Subject" class="form-control">
                <label for="form-Subject">Sujet</label>
              </div>
              <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-text">Envoyer un message</label>
              </div>
              <div class="text-center">
                <button id="contacter_nous" type="button" class="btn btn-primary">
                Envoyer
                </button>

              </div>
            </div>
          </div>
          <!-- Form with header -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-7">

          <!--Google map-->
          <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.6224008945082!2d3.221015475577488!3d36.75563367225977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e4f52f1bd7017%3A0x623ac2370e0091a6!2zSElTIFVuaXZlcnNpdHkgfCDYp9mE2YXYudmH2K8g2KfZhNi52KfZhNmKINmE2YTYudmE2YjZhQ!5e0!3m2!1sfr!2sdz!4v1687447751258!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!-- Buttons-->
          <div class="row text-center">
            <div class="col-md-4">
              <a class="btn-floating blue accent-1">
                <i class="fas fa-map-marker-alt"></i>
              </a>
              <p>Bordj El Kiffan, 16031</p>
              <p class="mb-md-0">Alger – Algerie</p>
            </div>
            <div class="col-md-4">
              <a class="btn-floating blue accent-1">
                <i class="fas fa-phone"></i>
              </a>
              <p>contact@his.edu.dz</p>

            </div>
            <div class="col-md-4">
              <a class="btn-floating blue accent-1">
                <i class="fas fa-envelope"></i>
              </a>
              <p>+213 7 70 70 62 48</p>
              <p class="mb-md-0">+213 7 70 70 62 52</p>

            </div>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!--Section: Content-->


  </div>


</div>



    <script src="{{ asset('js/index.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
