<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidat;
use App\Models\Specialite;
use App\Models\DemandeAdmission;



use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function index(){

        return view("candidatureForm");
    }


    public function save_candidature_his (Request $request)
    {
        $request->validate([

            'diplomeCand'=> 'required',
            'mentionCand'=> 'required',
            'niveauCand'=> 'required',
            'nom'=> 'required',
            'prenom'=> 'required',
            'dateNaiss'=> 'required',
            'villeNaiss'=> 'required',
            'telephone'=> 'required',
            'adresse'=> 'required',
            'pays'=> 'required',
            'codePostal'=> 'required',
            'ville'=> 'required',
            'anneeBac'=> 'required',
            'serieBac'=> 'required',
            'scoreBac'=> 'required',
            'nomLycee'=> 'required',
            'langueMat1'=> 'required',
            'langueMat2'=> 'required',
            'niveauFr'=> 'required',
            'niveauEn'=> 'required',
            'situationCand'=> 'required',
            'cinnaissHis'=> 'required',
            'photoPDF' => 'required|file',
            'idPDF' => 'required|file',
            'note_trimestre_PDF' => 'required|file',
            'note_bac_PDF' => 'required|file',
            'diplome_bac_PDF' => 'required|file',

        ]);
            // Récupérer les valeurs des champs "diplomeCand", "mentionCand" et "niveauCand"
            $diplomeCand = $request->diplomeCand;
            $mentionCand = $request->mentionCand;
            $niveauCand = $request->niveauCand;

            $email = 'aitmokhtarmohamedamine20@gmail.com';

            // Vérifier si l'utilisateur existe déjà dans la table "users" avec l'e-mail fourni
            $user = User::where('email', $email)->first();

            // Enregistrement des données dans la table "candidat$candidat"
            $candidat = new Candidat;
            $candidat->nom = $request->nom;
            $candidat->prenom = $request->prenom;
            $candidat->dateNaiss = $request->dateNaiss;
            $candidat->villeNaiss = $request->villeNaiss;
            $candidat->telephone = $request->telephone;
            $candidat->adresse = $request->adresse;
            $candidat->pays = $request->pays;
            $candidat->codePostal = $request->codePostal;
            $candidat->ville = $request->ville;
            $candidat->anneeBac = $request->anneeBac;
            $candidat->serieBac = $request->serieBac;
            $candidat->scoreBac = $request->scoreBac;
            $candidat->nomLycee = $request->nomLycee;
            $candidat->langueMat1 = $request->langueMat1;
            $candidat->langueMat2 = $request->langueMat2;
            $candidat->niveauFr = $request->niveauFr;
            $candidat->niveauEn = $request->niveauEn;
            $candidat->situationCand = json_encode($request->situationCand);
            $candidat->cinnaissHis = $request->cinnaissHis;


            if ($request->hasFile('photoPDF')) {
                $photoPDF = $request->file('photoPDF');
                $photoPDFName = 'photo_PDF.' . $photoPDF->getClientOriginalExtension();
                $photoPDF->storeAs('public/JUSTIFICATIF', $photoPDFName);
                $candidat->photoPDF = $photoPDFName;
            }


            // Le reste du code reste inchangé


            if ($request->hasFile('idPDF')) {
                $idPDF = $request->file('idPDF');
                $idPDFName = 'idPDF.' . $idPDF->getClientOriginalExtension();
                $idPDF->storeAs('public\JUSTIFICATIF', $idPDFName);
                $candidat->idPDF = $idPDFName;
            }

            if ($request->hasFile('note_trimestre_PDF')) {
                $noteTrimestrePDF = $request->file('note_trimestre_PDF');
                $noteTrimestrePDFName = 'note_trimestre_PDF.' . $noteTrimestrePDF->getClientOriginalExtension();
                $noteTrimestrePDF->storeAs('public\JUSTIFICATIF', $noteTrimestrePDFName);
                $candidat->note_trimestre_PDF = $noteTrimestrePDFName;
            }

            if ($request->hasFile('note_bac_PDF')) {
                $noteBacPDF = $request->file('note_bac_PDF');
                $noteBacPDFName = 'note_bac_PDF.' . $noteBacPDF->getClientOriginalExtension();
                $noteBacPDF->storeAs('public\JUSTIFICATIF', $noteBacPDFName);
                $candidat->note_bac_PDF = $noteBacPDFName;
            }

            if ($request->hasFile('diplome_bac_PDF')) {
                $diplomeBacPDF = $request->file('diplome_bac_PDF');
                $diplomeBacPDFName = 'diplome_bac_PDF.' . $diplomeBacPDF->getClientOriginalExtension();
                $diplomeBacPDF->storeAs('public\JUSTIFICATIF', $diplomeBacPDFName);
                $candidat->diplome_bac_PDF = $diplomeBacPDFName;
            }

            // // Enregistrer les fichiers dans le système de fichiers et obtenir les chemins d'accès
            // $photoPath = $request->file('photoPDF')->store('photoPDF');
            // $idPath = $request->file('idPDF')->store('idPDF');
            // $noteTrimPath = $request->file('note_trimestre_PDF')->store('note_trimestre_PDF');
            // $noteBacPath = $request->file('note_bac_PDF')->store('note_bac_PDF');
            // $diplomeBacPath = $request->file('diplome_bac_PDF')->store('diplome_bac_PDF');

            // // Associer les chemins d'accès aux colonnes correspondantes dans le modèle de table "candidats"
            // $candidat->photoPDF = $photoPath;
            // $candidat->idPDF = $idPath;
            // $candidat->note_trimestre_PDF = $noteTrimPath;
            // $candidat->note_bac_PDF = $noteBacPath;
            // $candidat->diplome_bac_PDF = $diplomeBacPath;

            $candidat->user()->associate($user); // Association de l'utilisateur à l'étudiant
            $candidat->save();


            $candidatId = $candidat->id; // Récupérer l'ID du candidat

            // Créer une nouvelle entrée dans la table "specialites"
            $specialite = new Specialite;
            $specialite->titre = $mentionCand; // Assigner la valeur de mentionCand au champ "titre"
            $specialite->duree = $request->anneeBac; // Assigner la valeur de anneeBac au champ "duree"
            $specialite->save();
            $specialiteId = $specialite->id; // Récupérer l'ID de la spécialité

         // Création de la demande d'admission associée
            $demandeAdmission = new DemandeAdmission;
            // Association du candidat à la demande d'admission
            $demandeAdmission->Candidat()->associate($candidat);
            $demandeAdmission->Specialite()->associate($specialite);
            $demandeAdmission->diplomeCand = $diplomeCand;
            $demandeAdmission->mentionCand = $mentionCand;
            $demandeAdmission->niveauCand = $niveauCand;


            $demandeAdmission->save();


            return redirect()->route('candidatureForm')->with('status','L\'étudiant a été ajouté avec succès.');

                }


}
