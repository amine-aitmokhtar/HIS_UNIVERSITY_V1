<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelBureauInscription extends Model
{
    use HasFactory;

    protected $table = 'personnel_bureau_inscription';
    protected $primaryKey = 'idPersoBi';


    // Relation avec le modèle PersonnelAdministratif

    public function personnelAdministratif()
    {
        return $this->belongsTo(PersonnelAdministratif::class, 'idPersoAdm', 'idPersoAdm');
    }


}
