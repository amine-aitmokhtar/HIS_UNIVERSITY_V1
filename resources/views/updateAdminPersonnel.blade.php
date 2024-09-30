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


    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Modifier un membre du bureau d'inscription </h1>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="alert alert-danger"> {{ $error }} </li>

                    @endforeach
                </ul>

                <form action="{{ route('saveUpdateAdminPersonnelBureauInscription') }}" method="POST" class="form-group">
                    @csrf
                    <br>

                        <input type="hidden" name="id" value="{{$personnelBureau->idPersoBi}}">

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="nom" value="{{$personnel->nom}}">
                        </div>

                        <div class="form-group">
                            <label for="Prenom">Prenom</label>
                            <input type="text" class="form-control" id="Prenom" name="prenom" value="{{$personnel->prenom}}">
                        </div>

                        <div class="form-group">
                            <label for="Email">Adresse email</label>
                            <input type="email" class="form-control" id="Email" name="email" value="{{$personnel->user->email}}">

                        </div>

                        <div class="form-group">
                            <label for="Password">Mot de passe</label>
                            <input type="text" class="form-control" id="Password" name="password" value="{{$personnel->user->password}}">

                        </div>


                    <button type="submit" class="btn btn-primary">Modifier un membre bureau inscription</button>

                    <br>
                    <br>

                    <a a href="{{route('adminPersonnelBureauInscription')}}" class="btn btn-danger">Revenir a la liste des memebre du bureau inscription</a>
                  </form>

            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
