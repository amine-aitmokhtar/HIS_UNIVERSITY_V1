@extends('etudiantPortail')

@section('content')
  <div class="container">
    <h1>Demande des documents administratifs</h1>

    <div class="form-group">
      <label><strong>Documents souhaités :</strong></label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="documents[]" value="certificat-scolarite" id="check-certificat">
        <label class="form-check-label" for="check-certificat">Duplicata de certificat de scolarité</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="documents[]" value="releve-notes" id="check-releve-notes">
        <label class="form-check-label" for="check-releve-notes">Duplicata d'un relevé de notes</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="documents[]" value="releve-notes-bac" id="check-releve-notes-bac">
        <label class="form-check-label" for="check-releve-notes-bac">Une copie de relevé de notes du baccalauréat</label>
      </div>
    </div>

    <button class="btn btn-primary" type="submit">Soumettre</button>
  </div>

@endsection

@section('custom-css')
  <link rel="stylesheet" href="{{ asset('css/demandeDocument.css') }}">
@endsection

@section('custom-js')
  <script src="{{ asset('js/demandeDocument.js') }}"></script>
@endsection
