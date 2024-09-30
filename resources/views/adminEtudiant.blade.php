@extends('adminPortail')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des candidat HIS </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <!--==================== UNICONS ====================-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
</head>
  <body>

    <style>
     .btn {
    border: 1px solid #e0e0e0;
    background: none;
    border-radius: 4px;
    color: #6a727a;
    cursor: pointer;
    font-family: var(--font-family);
  }

  .btn-success:hover {
  background: rgb(47, 214, 111);
  color: white;
  }
  .btn-danger:hover {
    background: crimson;
    color: white;
  }

  .btn-primary
 {
  align-items: center;
  color: white;
  background-color: #0eacca !important;
  border: white;
  font-weight: bold !important;
  transition: all 0.2s ease-in-out;
}
.btn-primary:hover
{
background-color: #0079b9 !important;
  transform: translateY(-2px);
}

.btn-primary:active
{
  background-color: #0eacca;
  border-color: #0eacca;
  transform: translateY(2px);
}
        </style>


    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Liste des étudiant </h1>
                <hr>
                <a a href="{{route('ajouterEtudiant')}}" class="btn btn-primary">Ajouter un étudiant</a>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
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
                            <td>{{ $etudiant->user->email }}</td>
                            <td>{{ $etudiant->user->password }}</td>
                            <td>
                                <a href="{{ route('updateAdminEtudiant', ['id' => $etudiant->idEtd]) }}" class="btn btn-success">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('deleteAdminEtudiant', ['id' => $etudiant->idEtd]) }}" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>


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
