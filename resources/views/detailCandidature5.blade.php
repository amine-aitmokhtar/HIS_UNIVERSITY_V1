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
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>

                <br>

                <h2 class="titre-etatcivil">Justificatifs</h2>
                <table>
                    <thead>
                      <tr>
                        <th>Justificatif</th>
                        <th>Fichier</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Justificatif 1</td>
                        <td>
                          <embed src="{{ asset($candidat->photoPDF) }}" type="application/pdf" width="300" height="200" />
                        </td>
                        <td>
                          <a href="{{ asset($candidat->photoPDF) }}" target="_blank">Voir</a>
                        </td>
                        <td>
                            <embed src="{{ asset($candidat->id_PDF) }}" type="application/pdf" width="300" height="200" />
                        </td>

                          <td>
                            <a href="{{ asset($candidat->id_PDF) }}" target="_blank">Voir</a>
                          </td>
                        <td>
                            <embed src="{{ asset($candidat->note_trimestre_PDF) }}" type="application/pdf" width="300" height="200" />
                        </td>

                        <td>
                            <a href="{{ asset($candidat->note_trimestre_PDF) }}" target="_blank">Voir</a>
                        </td>

                        <td>
                            <embed src="{{ asset($candidat->note_trimestre_PDF) }}" type="application/pdf" width="300" height="200" />
                        </td>

                          <td>
                            <a href="{{ asset($candidat->note_bac_PDF) }}" target="_blank">Voir</a>
                          </td>

                          <td>
                            <embed src="{{ asset($candidat->note_bac_PDF) }}" type="application/pdf" width="300" height="200" />
                        </td>

                        <td>
                            <embed src="{{ asset($candidat->diplome_bac_PDF) }}" type="application/pdf" width="300" height="200" />
                        </td>

                          <td>
                            <a href="{{ asset($candidat->diplome_bac_PDF) }}" target="_blank">Voir</a>
                          </td>
                      </tr>
                      <!-- Ajoutez les autres lignes pour les autres PDF -->
                    </tbody>
                  </table>

                <a href="{{route('ListeCandidature')}}" class="btn btn-danger">Revenir à la liste des étudiants</a>
            </div>
        </div>
    </div>
@endsection
