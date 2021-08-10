<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annex extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'email',
        'ca',
        'infocompte',
        'nbr_employee',
        'gerant',
        'date_ouverture',
        'flag'

    ];


    public function entreprisesAnnex()
    {
        return $this->belongsTo(Entreprise::class,"entrprise_id");
    }

     public function contracts()
    {
        return $this->hasMany('App\Models\Contract');
    }


}