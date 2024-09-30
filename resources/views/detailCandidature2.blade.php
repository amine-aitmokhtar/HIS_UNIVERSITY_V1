@extends('bureauPortail')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Détails de la candidature d'un candidat</h1>
                <hr>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-Formation', ['id' => $candidat->idCand]) }}">FORMATION</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-EtatCivil', ['id' => $candidat->idCand]) }}">ÉTAT CIVIL</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-ParcoursAcademique', ['id' => $candidat->idCand]) }}">PARCOURS ACADÉMIQUE</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-InformationsDiverses', ['id' => $candidat->idCand]) }}">INFORMATIONS DIVERSES</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-Justificatif', ['id' => $candidat->idCand]) }}">JUSTIFICATIF</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ConsulterDetailCandidat-Decision', ['id' => $candidat->idCand]) }}">DÉCISION</a></li>
                    </ol>
                </nav>

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

                <br>

                <br>
                <h2 class="titre-etatcivil">Informations générales</h2>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="NomCandidat" name="nom" value="{{$candidat->nom}}" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" id="PrenomCadidat" name="prenom" value="{{$candidat->prenom}}" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="prenom" class="form-label">Sexe</label>
                        <input type="text" class="form-control" id="SexeCandidat" name="sexe" value="{{$candidat->sexe}}" readonly>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                          <label for="jour" class="form-label">Date de naissance</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="jour" name="jNaiss" value="{{$candidat->jNaiss}}" readonly>
                            <span class="input-group-text">/</span>
                            <input type="text" class="form-control" id="mois" name="mNaiss" value="{{$candidat->mNaiss}}" readonly>
                            <span class="input-group-text">/</span>
                            <input type="text" class="form-control" id="annee" name="aNaiss" value="{{$candidat->jNaiss}}" readonly>
                          </div>

                        </div>
                        <div class="col-md-4">
                            <label for="prenom" class="form-label">Age</label>
                            <input type="text" class="form-control"readonly>
                        </div>
                          <div class="col-md-4">
                            <label for="prenom" class="form-label">Ville de naissance</label>
                            <input type="text" class="form-control" id="villenaiss" name="villeNaiss" value="{{$candidat->villeNaiss}}" readonly>
                          </div>
                    </div>
                    <br>
                    <h2 class="titre-etatcivil">Adresse</h2>
                    <div class="row mt-4">
                      <div class="col-md-4">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control" id="Telephone" name="telephone" value="{{$candidat->telephone}}" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="jour" name="adresse" value="{{$candidat->adresse}}" readonly>
                      </div>
                      <div class="col-md-4">
                        <label for="ville" class="form-label">Code Postal</label>
                        <input type="text" class="form-control" name="codePostal" value="{{$candidat->codePostal}}" readonly>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                          <label for="nom" class="form-label">Pays</label>
                          <input type="text" class="form-control" name="pays" value="{{$candidat->pays}}" readonly>
                        </div>
                        <div class="col-md-6">
                          <label for="prenom" class="form-label">Ville de résidence</label>
                          <input type="text" class="form-control" name="ville" value="{{$candidat->ville}}" readonly>
                        </div>

                      </div>


                <br>

            </div>



            </div>
            <a href="{{route('ListeCandidature')}}" class="btn btn-danger">Revenir à la liste des étudiants</a>

    </div>

@endsection
