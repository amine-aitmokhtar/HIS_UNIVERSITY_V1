@extends('adminPortail')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des candidat HIS </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>


    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Liste des candidats </h1>
                <hr>
                <a a href="{{route('ajouterEtudiant')}}" class="btn btn-primary">Ajouter un étudiant</a>
                <hr>
                <table  class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse email</th>
                            <th>Mot de passe</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach($etudiants as $etudiant)
                        <tr>
                            <td>{{ $etudiant->id }}</td>
                            <td>{{ $etudiant->matricule }}</td>
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom }}</td>
                            <td>{{ optional($etudiant->user)->email }}</td>
                            <td>{{ optional($etudiant->user)->password }}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Modifier</a>
                                <a href="#" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
