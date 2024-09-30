<?php

namespace App\Models;
use App\Models\User;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = 'etudiants';
    protected $primaryKey = 'idEtd';

    protected $fillable = [
        'matricule',
        'nom',
        'prenom',

    ];

    // Modèle Etudiant
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'idUser');
    }




}
