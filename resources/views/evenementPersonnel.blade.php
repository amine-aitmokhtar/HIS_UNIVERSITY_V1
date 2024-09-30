<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evenement</title>
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
    <h1>Partager un événement</h1>
    <form>
      <div class="mb-3">
        <label for="partager-pour">Partager pour :</label>
        <select id="partager-pour" class="form-control">
          <option value="amis">Tous le monde</option>
          <option value="INFO-L3">INFO L3</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" class="form-control" required>
      </div>
    
      <div class="mb-3">
        <label for="photo">Photo :</label>
        <input type="file" id="photo" class="form-control" accept="image/*" required>
      </div>
    
      <div class="mb-3">
        <label for="description">Description :</label>
        <textarea class="form-control" id="description" rows="5" required></textarea>
      </div>
    
      <div class="mb-3">
        <label for="lien">Lien :</label>
        <input type="url" id="lien" class="form-control" required>
      </div>
    
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
  <script>
    // Votre script JavaScript ici
  </script>
</body>
</html>    

  