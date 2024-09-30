<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeAdmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'idCand',
        'idSpec',
        'diplomeCand',
        'mentionCand',
        'niveauCand',
    ];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class, 'idCand');
    }


    public function specialite()
    {
        return $this->belongsTo(Specialite::class, 'idSpec');
    }


}
