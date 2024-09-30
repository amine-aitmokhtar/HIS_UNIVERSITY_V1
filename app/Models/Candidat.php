<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCand';

    protected $fillable = [

        'nom',
        'prenom',
        'dateNaiss',
        'villeNaiss',
        'telephone',
        'adresse',
        'pays',
        'codePostal',
        'ville',
        'anneeBac',
        'scoreBac',
        'serieBac',
        'nomLycee',
        'langueMat1',
        'langueMat2',
        'niveauFr',
        'suiviFr',
        'niveauEn',
        'suiviEn',
        'situationCand',
        'cinnaissHis',
        'photoPDF',
        'idPDF',
        'note_trimestre_PDF',
        'note_bac_PDF',
        'diplome_bac_PDF',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function demandeAdmission()
    {
        return $this->hasOne(DemandeAdmission::class, 'idCand');
    }

}

