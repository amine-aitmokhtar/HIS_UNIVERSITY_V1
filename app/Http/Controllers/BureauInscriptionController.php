<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Specialite;

use App\Models\DemandeAdmission;

class BureauInscriptionController extends Controller
{
    public function index()
     {

         return view("bureauPortail");

     }


     public function liste_candidature()

     {
         $candidats = Candidat::all();
         $specialites = Specialite::all();
         $demandeAdmissions = DemandeAdmission::all();
         return view("voirCandidat", compact('candidats','specialites','demandeAdmissions'));
     }

     public function consulter_formation($id)
     {
         $candidat = Candidat::find($id);
         $demandeAdmission = $candidat->demandeAdmission;
         return view('detailCandidature', compact('candidat','demandeAdmission'));
     }

     public function consulter_etat_civil($id)
     {
         $candidat = Candidat::find($id);
         $demandeAdmission = $candidat->demandeAdmission;
         return view('detailCandidature2', compact('candidat','demandeAdmission'));
     }

     public function consulter_parcours($id)
     {
         $candidat = Candidat::find($id);
         $demandeAdmission = $candidat->demandeAdmission;
         return view('detailCandidature3', compact('candidat','demandeAdmission'));
     }

     public function consulter_information_diverse($id)
     {
         $candidat = Candidat::find($id);
         $demandeAdmission = $candidat->demandeAdmission;
         return view('detailCandidature4', compact('candidat','demandeAdmission'));
     }
     public function consulter_justificatif($id)
     {
         $candidat = Candidat::find($id);
         $demandeAdmission = $candidat->demandeAdmission;
         return view('detailCandidature5', compact('candidat','demandeAdmission'));
     }

     public function decision($id)
     {
         $candidat = Candidat::find($id);
         $demandeAdmission = $candidat->demandeAdmission;
         return view('detailCandidature6', compact('candidat','demandeAdmission'));
     }


}
