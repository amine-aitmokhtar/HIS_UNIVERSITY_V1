<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\Etudiant;

use App\Models\PersonnelAdministratif;
use App\Models\PersonnelBureauInscription;

use Illuminate\Http\Request;

class AdminController extends Controller
{

     //INTERFACE ADMIN POUR LE CANDIDAT
     public function liste_candidat()
     {

         return view("adminCandidat");

     }

     public function ajouter_candidat()
     {
         return view("ajouterCandidat");
     }

     public function save_ajouter_candidat(Request $request)
     {
         $request->validate([
             'nom'=> 'required',
             'prenom'=> 'required',
             'email'=> 'required',
             'password'=> 'required',
             'specialite'=> 'required',
         ]);


        return redirect()->route('ajouterCandidat')->with('status','Le candidat a été ajouté avec succès.');



     }

     public function update_admin_candidat()
     {
         return view("updateAdminCandidat");
     }







    // //INTERFACE ADMIN POUR L'ETUDIANT

    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        $users = User::all();
        return view("adminEtudiant", compact('etudiants', 'users'));
    }

    public function ajouter_etudiant()
    {
        return view("ajouterEtudiant");
    }

    public function save_ajouter_etudiant(Request $request)
    {
        $request->validate([
            'matricule'=> 'required',
            'nom'=> 'required',
            'prenom'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);
            // Enregistrement des données dans la table "users"
            $user = new User;
            $user->email = $request->email;
            $user->password = bcrypt($request->password); // Hashage du mot de passe
            $user->save();

            // Enregistrement des données dans la table "etudiant"
            $etudiant = new Etudiant;
            $etudiant->matricule = $request->matricule;
            $etudiant->nom = $request->nom;
            $etudiant->prenom = $request->prenom;
            $etudiant->user()->associate($user); // Association de l'utilisateur à l'étudiant
            $etudiant->save();



       return redirect()->route('ajouterEtudiant')->with('status','L\'étudiant a été ajouté avec succès.');



    }


    public function update_admin_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $user = $etudiant->user;
        return view('updateAdminEtudiant', compact('etudiant', 'user'));
    }



    public function save_update_admin_etudiant(Request $request)
    {
        $request->validate([
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $user = $etudiant->user;

        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Hashage du mot de passe
        $user->update();

        $etudiant->matricule = $request->matricule;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->update();

        return redirect()->route('updateAdminEtudiant', ['id' => $etudiant->idEtd])->with('status', 'L\'étudiant a été modifié avec succès.');
    }

    public function delete_admin_etudiant($id)

    {
        $etudiant = Etudiant::find($id);
        $user = $etudiant->user;
        $etudiant->delete();
        $user->delete();


        return redirect()->route('adminEtudiant')->with('status','L\'étudiant a bien été supprimée .');

    }




    //INTERFACE ADMIN POUR LE PERSONNEL ADMINISTRATIF

    public function liste_bureau_inscription()
    {
        $personnel = PersonnelAdministratif::all();
        return view("adminPersonnelBureauInscription", compact('personnel'));

    }


    public function ajouter_bureau_inscription()
    {
        return view("ajouterPersonnelBureauInscription");
    }

    public function save_ajouter_bureau_inscription(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Enregistrement des données dans la table "users"
        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Enregistrement des données dans la table "personnel_administratifs"
        $personnel = new PersonnelAdministratif;
        $personnel->nom = $request->nom;
        $personnel->prenom = $request->prenom;
        $personnel->user()->associate($user);
        $personnel->save();

        // Enregistrement des données dans la table "personnel_bureau_inscription"
        $personnelBureau = new PersonnelBureauInscription;
        $personnelBureau->personnelAdministratif()->associate($personnel);
        $personnelBureau->save();

        return redirect()->route('ajouterPersonnelBureauInscription')->with('status', 'Le membre du personnel administratif a été ajouté avec succès.');
    }

    public function update_admin_bureau_inscription($id)
    {
        $personnelBureau = PersonnelBureauInscription::find($id);
        $personnel = $personnelBureau->personnelAdministratif;
        $user = $personnel->user;

        return view("updateAdminPersonnel", compact('personnelBureau', 'personnel', 'user'));

    }




    public function save_update_admin_bureau_inscription(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Récupérer les objets existants à partir de la base de données
        $personnelBureau = PersonnelBureauInscription::find($request->id);
        $personnel = $personnelBureau->personnelAdministratif;
        $user = $personnel->user;

        // Mettre à jour les informations
        $personnel->nom = $request->nom;
        $personnel->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        // Sauvegarder les changements
        $personnel->update();
        $user->update();

        return redirect()->route('updateAdminPersonnel', ['id' => $personnel->idPersoAdm])->with('status', 'Le membre du personnel administratif a été mis à jour avec succès.');
    }


    public function delete_admin_bureau_inscription($id)
    {
        $personnelBureau = PersonnelBureauInscription::find($id);
        $personnel = $personnelBureau->personnelAdministratif;
        $user = $personnel->user;

        $personnelBureau->forceDelete();
        $personnel->forceDelete();
        $user->forceDelete();

        return redirect()->route('adminPersonnelBureauInscription')->with('status', 'Le membre du bureau d\'inscription a été supprimé avec succès.');
    }


}
