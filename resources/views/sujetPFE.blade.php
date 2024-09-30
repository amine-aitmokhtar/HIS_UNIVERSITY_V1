@extends('etudiantPortail')

@section('content')

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de candidature pour un sujet de PFE</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      max-width: 600px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #333333;
    }

    label {
      font-weight: bold;
    }

    .form-check-label {
      font-weight: normal;
    }

    .alert-info {
      margin-bottom: 20px;
    }

    .btn-primary {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Candidature pour un sujet de PFE</h1>
    <form>
      <div class="mb-3">
        <label for="postuler-seule-binom">Postuler :</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="postuler-seule-binom" id="postuler-seule" value="seule" required>
          <label class="form-check-label" for="postuler-seule">Seul(e)</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="postuler-seule-binom" id="postuler-binom" value="binom">
          <label class="form-check-label" for="postuler-binom">En Binôme</label>
        </div>
      </div>

      <div id="binom-fields" style="display: none;">
        <div class="mb-3">
          <label for="choix-binom">Choisir votre binôme :</label>
          <select id="choix-binom" class="form-control">
            <!-- Ajoutez ici les options de la liste déroulante pour les binômes -->
            <option value="binom1">Binôme 1</option>
            <option value="binom2">Binôme 2</option>
            <option value="binom3">Binôme 3</option>
          </select>
        </div>
      </div>

      <div class="mb-3">
        <label for="sujet-specifique">Postuler pour :</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sujet-specifique" id="sujet-specifique-oui" value="oui" required>
          <label class="form-check-label" for="sujet-specifique-oui">Sujet specifique</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sujet-specifique" id="sujet-specifique-non" value="non">
          <label class="form-check-label" for="sujet-specifique-non">Sujet existant</label>
        </div>
      </div>

      <div id="sujet-specifique-fields" style="display: none;">
        <div class="alert alert-info mb-3" role="alert">
          Cette rubrique est réservée aux sujets déjà communiqués et validés par les enseignants.
        </div>
        <div class="mb-3">
          <label for="nom-enseignant">Nom de l'enseignant :</label>
          <input type="text" id="nom-enseignant" class="form-control">
        </div>
        <div class="mb-3">
          <label for="titre-sujet">Titre du sujet :</label>
          <input type="text" id="titre-sujet" class="form-control">
        </div>
      </div>

      <div id="rechercher-fields" style="display: none;">
        <div class="mb-3">
            <label for="rechercher-enseignant">Rechercher par :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rechercher" id="rechercher-enseignant" value="enseignant">
                <label class="form-check-label" for="rechercher-enseignant">Enseignant</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rechercher" id="rechercher-sujet" value="sujet">
                <label class="form-check-label" for="rechercher-sujet">Sujet</label>
            </div>
        </div>

        <div id="rechercher-enseignant-fields" style="display: none;">
            <div class="mb-3">
                <label for="choix-enseignant">Choisir un enseignant :</label>
                <select id="choix-enseignant" class="form-control">
                    <!-- Ajoutez ici les options de la liste déroulante pour les enseignants -->
                    <option value="enseignant1">Enseignant 1</option>
                    <option value="enseignant2">Enseignant 2</option>
                    <option value="enseignant3">Enseignant 3</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="choix-sujet-enseignant">Choisir un sujet encadré par cet enseignant :</label>
                <select id="choix-sujet-enseignant" class="form-control">
                    <!-- Ajoutez ici les options de la liste déroulante pour les sujets encadrés par l'enseignant sélectionné -->
                    <option value="sujet1">Sujet 1</option>
                    <option value="sujet2">Sujet 2</option>
                    <option value="sujet3">Sujet 3</option>
                </select>
            </div>
        </div>

        <div id="rechercher-sujet-fields" style="display: none;">
            <div class="mb-3">
                <label for="choix-sujet">Choisir un sujet :</label>
                <select id="choix-sujet" class="form-control">
                    <!-- Ajoutez ici les options de la liste déroulante pour les sujets -->
                    <option value="sujet1">Sujet 1</option>
                    <option value="sujet2">Sujet 2</option>
                    <option value="sujet3">Sujet 3</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="choix-enseignant-sujet">Choisir l'enseignant encadrant ce sujet :</label>
                <select id="choix-enseignant-sujet" class="form-control">
                    <!-- Ajoutez ici les options de la liste déroulante pour les enseignants encadrant le sujet sélectionné -->
                    <option value="enseignant1">Enseignant 1</option>
                    <option value="enseignant2">Enseignant 2</option>
                    <option value="enseignant3">Enseignant 3</option>
                </select>
            </div>
        </div>
    </div>

      <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
  </div>

  <script>
    const postulerSeuleRadio = document.getElementById('postuler-seule');
    const postulerBinomRadio = document.getElementById('postuler-binom');
    const binomFields = document.getElementById('binom-fields');

    postulerSeuleRadio.addEventListener('change', updateDisplayBinomFields);
    postulerBinomRadio.addEventListener('change', updateDisplayBinomFields);

    function updateDisplayBinomFields() {
      if (postulerBinomRadio.checked) {
        binomFields.style.display = 'block';
      } else {
        binomFields.style.display = 'none';
      }
    }

    //---------------------
    const sujetSpecifiqueOuiRadio = document.getElementById('sujet-specifique-oui');
    const sujetSpecifiqueNonRadio = document.getElementById('sujet-specifique-non');
    const sujetSpecifiqueFields = document.getElementById('sujet-specifique-fields');
    const rechercherFields = document.getElementById('rechercher-fields');

    sujetSpecifiqueOuiRadio.addEventListener('change', updateDisplaySujetSpecifiqueFields);
    sujetSpecifiqueNonRadio.addEventListener('change', updateDisplaySujetSpecifiqueFields);

    function updateDisplaySujetSpecifiqueFields() {
      if (sujetSpecifiqueOuiRadio.checked) {
        sujetSpecifiqueFields.style.display = 'block';
        rechercherFields.style.display = 'none';
      } else if (sujetSpecifiqueNonRadio.checked) {
        sujetSpecifiqueFields.style.display = 'none';
        rechercherFields.style.display = 'block';
      }
    }

    //---------------------
    const rechercherEnseignantRadio = document.getElementById('rechercher-enseignant');
    const rechercherSujetRadio = document.getElementById('rechercher-sujet');
    const rechercherEnseignantFields = document.getElementById('rechercher-enseignant-fields');
    const rechercherSujetFields = document.getElementById('rechercher-sujet-fields');

    rechercherEnseignantRadio.addEventListener('change', updateDisplayRechercherFields);
    rechercherSujetRadio.addEventListener('change', updateDisplayRechercherFields);

    function updateDisplayRechercherFields() {
      if (rechercherEnseignantRadio.checked) {
        rechercherEnseignantFields.style.display = 'block';
        rechercherSujetFields.style.display = 'none';
      } else if (rechercherSujetRadio.checked) {
        rechercherEnseignantFields.style.display = 'none';
        rechercherSujetFields.style.display = 'block';
      }
    }
  </script>
</body>

</html>
@endsection
