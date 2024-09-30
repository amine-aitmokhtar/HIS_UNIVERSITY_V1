@extends('bureauPortail')

@section('content')
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liste des candidatures</title>
    <!-- bootstrap5 dataTables css cdn -->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

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

  </head>

  <body>
    <div class="container mt-4">


      <table id="datatable" class="table dataTable">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Spécialité</th>
            <th>Date</th>
            <th data-orderable="false">Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach($candidats as $candidat)
          <tr>

            <td>{{ $candidat->nom }}</td>
            <td>{{ $candidat->prenom }}</td>
            <td>{{ $candidat->demandeAdmission->specialite->titre }}</td>
            <td>{{ $candidat->demandeAdmission->created_at}}</td>
            <td>

                <a href="{{ route('ConsulterDetailCandidat-Formation', ['id' => $candidat->idCand]) }}" class="btn btn-success">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- bootstrap5 dataTables js cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#datatable').DataTable();
      });
    </script>
  </body>
</html>
@endsection
