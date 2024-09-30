@extends('etudiantPortail')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Simple Datatable Example</title>
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

  </head>

  <body>
    <div class="container mt-4">
      <table
        id="datatable"
        class="table"
      >
        <thead>
          <tr class="table-light">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>createdAt</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Jhon doe</td>
            <td>Jhondoe@gmail.com</td>
            <td>10/10/22</td>
          </tr>
          <tr>
            <td>2</td>
            <td>smae</td>
            <td>smae@gmail.com</td>
            <td>10/11/22</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jhon doe3</td>
            <td>Jhondoe3@gmail.com</td>
            <td>10/10/22</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Jhon doe4</td>
            <td>Jhondoe4@gmail.com</td>
            <td>10/10/24</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jhon doe5</td>
            <td>Jhondoe5@gmail.com</td>
            <td>10/10/21</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jhon doe3</td>
            <td>Jhondoe3@gmail.com</td>
            <td>10/10/22</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Jhon doe4</td>
            <td>Jhondoe4@gmail.com</td>
            <td>10/10/24</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jhon doe5</td>
            <td>Jhondoe5@gmail.com</td>
            <td>10/10/21</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jhon doe3</td>
            <td>Jhondoe3@gmail.com</td>
            <td>10/10/22</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Jhon doe4</td>
            <td>Jhondoe4@gmail.com</td>
            <td>10/10/24</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jhon doe5</td>
            <td>Jhondoe5@gmail.com</td>
            <td>10/10/21</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jhon doe3</td>
            <td>Jhondoe3@gmail.com</td>
            <td>10/10/22</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Jhon doe4</td>
            <td>Jhondoe4@gmail.com</td>
            <td>10/10/24</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jhon doe5</td>
            <td>Jhondoe5@gmail.com</td>
            <td>10/10/21</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jhon doe3</td>
            <td>Jhondoe3@gmail.com</td>
            <td>10/10/22</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Jhon doe4</td>
            <td>Jhondoe4@gmail.com</td>
            <td>10/10/24</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jhon doe5</td>
            <td>Jhondoe5@gmail.com</td>
            <td>10/10/21</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jhon doe3</td>
            <td>Jhondoe3@gmail.com</td>
            <td>10/10/22</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Jhon doe4</td>
            <td>Jhondoe4@gmail.com</td>
            <td>10/10/24</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jhon doe5</td>
            <td>Jhondoe5@gmail.com</td>
            <td>10/10/21</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jhon doe3</td>
            <td>Jhondoe3@gmail.com</td>
            <td>10/10/22</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Jhon doe4</td>
            <td>Jhondoe4@gmail.com</td>
            <td>10/10/24</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jhon doe5</td>
            <td>Jhondoe5@gmail.com</td>
            <td>10/10/21</td>
          </tr>

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




@section('custom-js')
<script>
      $(document).ready(function () {
        $('#datatable').DataTable();
      });
</script>
@endsection
