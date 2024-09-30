@extends('etudiantPortail')

@section('content')
  <div class="container">
    <h1>Fomuler une réclamation</h1>
    <p>Si vous n’êtes pas satisfait d’un service ou si vous avez des remarques ou des propositions à faire, vous pouvez soumettre une réclamation en utilisant ce formulaire mis à votre disposition.</p>

    <form>
      <div class="mb-3">
        <label for="reclamation">Votre réclamation :</label>
        <textarea class="form-control" id="reclamation" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
@endsection

@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/reclamation.css') }}">
@endsection

@section('custom-js')
  <script src="{{ asset('js/reclamation.js') }}"></script>
@endsection
