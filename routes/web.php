<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/monPortail', function () {
    return view('monPortail');
});

Route::get('/authentificationCandidat', function () {
    return view('authentificationCandidat');
});

Route::get('/authentification', function () {
    return view('authentification');
});

Route::get('/etudiantPortail', function () {
    return view('etudiantPortail');
});


Route::get('/bureauPortail', function () {
    return view('bureauPortail');
});

Route::get('/adminPortail', function () {
    return view('adminPortail');
});




use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\DemandeDocumentController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\EvenementPersonnelController;
use App\Http\Controllers\StageExterneController;
use App\Http\Controllers\SujetPFEController;
use App\Http\Controllers\EmploiDuTempsController;
use App\Http\Controllers\PvDeliberationsController;
use App\Http\Controllers\ProgrammePedagogiqueController;
use App\Http\Controllers\CalendrierUniversitaireController;
use App\Http\Controllers\BureauInscriptionController;
use App\Http\Controllers\AuthentificationBureauController;
use App\Http\Controllers\DetailCandidatureController;
use App\Http\Controllers\DemandeAdmissionController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidatureController;

// PORTAIL ETUDIANT
Route::get('/etudiantPortail/reclamation', [ReclamationController::class, 'index'])->name('reclamation');
Route::get('/etudiantPortail/demande-document', [DemandeDocumentController::class, 'index'])->name('demande-document');
Route::get('/etudiantPortail/evenement', [EvenementController::class, 'index'])->name('evenement');
Route::get('/etudiantPortail/evenement-personnel', [EvenementPersonnelController::class, 'index'])->name('evenement-personnel');
Route::get('/etudiantPortail/stage-externe', [StageExterneController::class, 'index'])->name('stage-externe');
Route::get('/etudiantPortail/sujet-pfe', [SujetPFEController::class, 'index'])->name('sujet-pfe');
Route::get('/etudiantPortail/emploi-du-temps', [EmploiDuTempsController::class, 'index'])->name('emploi-du-temps');
Route::get('/etudiantPortail/pv-deliberations', [PvDeliberationsController::class, 'index'])->name('pv-deliberations');
Route::get('/etudiantPortail/programme-pedagogique', [ProgrammePedagogiqueController::class, 'index'])->name('programme-pedagogique');
Route::get('/etudiantPortail/calendrier-universitaire', [CalendrierUniversitaireController::class, 'index'])->name('calendrier-universitaire');

//PORTAIL BUREAU INSCRIPTION
Route::get('/bureauPortail/voirCandidat', [BureauInscriptionController::class, 'index'])->name('voirCandidat');
Route::get('/bureauPortail/ListeCandidature', [BureauInscriptionController::class, 'liste_candidature'])->name('ListeCandidature');
Route::get('/bureauPortail/ListeCandidature/ConsulterDetailCandidat/{id}', [BureauInscriptionController::class, 'consulter_formation'])->name('ConsulterDetailCandidat-Formation');
Route::get('/bureauPortail/ListeCandidature/ConsulterDetailCandidatEtatCivil/{id}', [BureauInscriptionController::class,'consulter_etat_civil'])->name('ConsulterDetailCandidat-EtatCivil');
Route::get('/bureauPortail/ListeCandidature/ConsulterDetailCandidatParcousAcademique/{id}', [BureauInscriptionController::class,'consulter_parcours'])->name('ConsulterDetailCandidat-ParcoursAcademique');
Route::get('/bureauPortail/ListeCandidature/ConsulterDetailCandidatInformationsDiverses/{id}', [BureauInscriptionController::class,'consulter_information_diverse'])->name('ConsulterDetailCandidat-InformationsDiverses');
Route::get('/bureauPortail/ListeCandidature/ConsulterDetailCandidatJustificatif/{id}', [BureauInscriptionController::class,'consulter_justificatif'])->name('ConsulterDetailCandidat-Justificatif');
Route::get('/bureauPortail/ListeCandidature/ConsulterDetailCandidatDecision/{id}', [BureauInscriptionController::class, 'decision'])->name('ConsulterDetailCandidat-Decision');

//Route::post('/bureauPortail/ListeCandidature/ConsulterDetailCandidat/ReponseBureauInscription', [BureauInscriptionController::class, 'reponse_candidat'])->name('ReponseBureauInscription');
Route::get('/bureauPortail/authentificationBureau', [AuthentificationBureauController::class, 'index'])->name('authentificationBureau');


//CANDIDATURE
Route::get('/Candidature_HIS',[CandidatureController::class, 'index'])->name('candidatureForm');
Route::post('/Candidature_HIS/saveCandidatureHIS',[CandidatureController::class,'save_candidature_his'])->name('saveCandidatureHIS');

//PORTAIL ADMIN CANDIDAT
Route::get('/adminPortail/adminCandidat', [AdminController::class, 'liste_candidat'])->name('adminCandidat');
Route::get('/adminPortail/ajouterCandidat', [AdminController::class, 'ajouter_candidat'])->name('ajouterCandidat');
Route::post('/adminPortail/ajouterCandidat/saveAjoutCandidat', [AdminController::class, 'save_ajouter_candidat'])->name('saveAjoutCandidat');
Route::get('/adminPortail/updateAdminCandidat', [AdminController::class, 'update_admin_candidat'])->name('updateAdminCandidat');


//PORTAIL ADMIN ETUDIANT
Route::get('/adminPortail/adminEtudiant', [AdminController::class, 'liste_etudiant'])->name('adminEtudiant');
Route::get('/adminPortail/ajouterEtudiant', [AdminController::class, 'ajouter_etudiant'])->name('ajouterEtudiant');
Route::post('/adminPortail/ajouterEtudiant/saveAjoutEtudiant', [AdminController::class, 'save_ajouter_etudiant'])->name('saveAjoutEtudiant');
Route::get('/adminPortail/updateAdminEtudiant/{id}', [AdminController::class, 'update_admin_etudiant'])->name('updateAdminEtudiant');
Route::post('/adminPortail/updateAdminEtudiant/saveUpdateAdminEtudiant', [AdminController::class, 'save_update_admin_etudiant'])->name('saveUpdateAdminEtudiant');
Route::get('/adminPortail/deleteAdminEtudiant/{id}', [AdminController::class, 'delete_admin_etudiant'])->name('deleteAdminEtudiant');


//PORTAIL ADMIN BUREAU INSCRIPTION
Route::get('/adminPortail/adminPersonnelBureauInscription', [AdminController::class, 'liste_bureau_inscription'])->name('adminPersonnelBureauInscription');
Route::get('/adminPortail/ajouterPersonnelBureauInscription', [AdminController::class, 'ajouter_bureau_inscription'])->name('ajouterPersonnelBureauInscription');
Route::post('/adminPortail/ajouterPersonnelBureauInscription/saveAjoutPersonnelBureauInscription', [AdminController::class, 'save_ajouter_bureau_inscription'])->name('saveAjoutPersonnelBureauInscription');
Route::get('/adminPortail/updateAdminPersonnel/{id}', [AdminController::class, 'update_admin_bureau_inscription'])->name('updateAdminPersonnel');
Route::post('/adminPortail/updateAdminPersonnelBureauInscription/saveUpdateAdminPersonnelBureauInscription', [AdminController::class, 'save_update_admin_bureau_inscription'])->name('saveUpdateAdminPersonnelBureauInscription');
Route::get('/adminPortail/deleteAdminPersonnelBureauInscription/{id}', [AdminController::class, 'delete_admin_bureau_inscription'])->name('deleteAdminPersonnelBureauInscription');
