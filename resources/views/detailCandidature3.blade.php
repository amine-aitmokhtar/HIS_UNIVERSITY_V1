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

                <h2 class="titre-etatcivil"> PARCOURS ACADÉMIQUE</h2>
                <br>

                <br>
                <h3 class="titre-etatcivil"> Baccalauréat</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <label for="nom" class="form-label">Annee</label>
                        <input type="text" class="form-control" id="AnneBac" name="anneBac" value="{{$candidat->anneBac}}" readonly>
                      </div>
                      <div class="col-md-6">
                        <label for="prenom" class="form-label">Série</label>
                        <input type="text" class="form-control" id="SerieBac" name="serieBac" value="{{$candidat->serieBac}}" readonly>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <label for="nom" class="form-label">Score</label>
                          <input type="text" class="form-control" id="ScoreBac" name="scoreBac" value="{{$candidat->scoreBac}}" readonly>
                        </div>
                        <div class="col-md-6">
                          <label for="prenom" class="form-label">Lycée</label>
                          <input type="text" class="form-control" id="prenom" id="PrenomCadidat" name="prenom" value="{{$candidat->prenom}}" readonly>
                        </div>
                      </div>


                <br>
            </div>



    </div>
            <a href="{{route('ListeCandidature')}}" class="btn btn-danger">Revenir à la liste des étudiants</a>

</div>

@endsection
