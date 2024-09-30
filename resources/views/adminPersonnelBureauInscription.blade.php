@extends('adminPortail')

@section('content')
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Liste du personnel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1>Liste du personnel</h1>
                    <hr>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                    <a href="{{ route('ajouterPersonnelBureauInscription') }}" class="btn btn-primary">Ajouter un membre du personnel</a>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th> id </th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse email</th>
                                <th>Mot de passe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($personnel as $personnels)
                                <tr>
                                    <td>{{ $personnels->id }}</td>
                                    <td>{{ $personnels->nom }}</td>
                                    <td>{{ $personnels->prenom }}</td>
                                    <td>{{ $personnels->user->email }}</td>
                                    <td>{{ $personnels->user->password }}</td>
                                    <td>
                                        <a href="{{ route('updateAdminPersonnel', ['id' => $personnels->idPersoAdm]) }}" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('deleteAdminPersonnelBureauInscription', ['id' => $personnels->idPersoAdm]) }}" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
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
