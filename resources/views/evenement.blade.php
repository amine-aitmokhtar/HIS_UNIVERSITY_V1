@extends('etudiantPortail')

@section('content')
  <div class="container">
    <h1>S'inscrire dans un événement</h1>

    <div class="card">
      <div class="card-header">
        Photo :
      </div>
      <div class="card-image">
        <img src="//Photo" alt="Photo de l'événement">
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        Titre de l'événement :
      </div>
      <div class="card-body">
        <h5 class="card-title">//Titre de l'événement</h5>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        Candidature pour :
      </div>
      <div class="card-body">
        <p class="card-text">//Partager pour</p>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        Description :
      </div>
      <div class="card-body">
        <p class="card-text">//Description</p>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">S'inscrire</button>

  </div>

@endsection

@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/evenement.css') }}">
@endsection

@section('custom-js')
  <script src="{{ asset('js/evenement.js') }}"></script>
@endsection
