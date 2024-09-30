<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelAdministratif extends Model
{
    use HasFactory;
    protected $table = 'personnel_administratifs';
    protected $primaryKey = 'idPersoAdm';

    protected $fillable = [
        'nom',
        'prenom',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'idUser');
    }

    public function personnel_bureau_inscription()
    {
        return $this->hasOne(PersonnelBureauInscription::class, 'idPersoBi','idPersoBi');
    }


}
