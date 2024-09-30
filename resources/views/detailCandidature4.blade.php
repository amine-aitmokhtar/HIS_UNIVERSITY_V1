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

                <h2 class="titre-etatcivil"> INFORMATIONS DIVERSES</h2>
                <br>
                <br>
                <h3>Langues </h3>
                <div class="row">
                  <div class="col-md-5">
                    <label for="nom" class="form-label">Langue maternelle 1</label>
                    <input type="text" class="form-control" id="LangueMat1" name="langMat1" value="{{$candidat->langueMat1}}" readonly>
                  </div>
                  <div class="col-md-5">
                    <label for="nom" class="form-label">Langue maternelle 2</label>
                    <input type="text" class="form-control" id="LangueMat2" name="langMat2" value="{{$candidat->langueMat2}}" readonly>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                      <label for="nom" class="form-label">Niveau en langue française</label>
                      <input type="text" class="form-control" id="LangueMat1" name="langMat1" value="{{$candidat->niveauFr}}" readonly>
                    </div>
                    <div class="col-md-5">
                      <label for="nom" class="form-label">Niveau en langue anglaise</label>
                      <input type="text" class="form-control" id="LangueMat2" name="langMat2" value="{{$candidat->niveauEn}}" readonly>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="row">
                    <div class="col-5">
                        <label for="situationCand">Situation actuelle :</label>
                        @if(isset($candidat->situationCand))
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Situation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(json_decode($candidat->situationCand, true) as $key => $situation)
                                        <tr>
                                            <td>{{$situation}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-5">
                      <label for="nom" class="form-label">Connaissance de HIS</label>
                      <input type="text" class="form-control" id="ConnaisHis" name="cinnaissHis" value="{{$candidat->cinnaissHis}}" readonly>
                    </div>
                  </div>

            </div>


    </div>
    <br>
    <a href="{{route('ListeCandidature')}}" class="btn btn-danger">Revenir à la liste des étudiants</a>

@endsection
