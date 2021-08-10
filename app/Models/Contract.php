<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'date_naisse',
        'age',
        'motif',
        'date_debut',
        'date_fin',
        'clause',
        'remuneration',
        'type_contract',
        'signature',
        'flag'

    ];

    public function annexesContract()
    {
        return $this->belongsTo(Annex::class,"annex_id");
    }


    public function personnes()
    {

       return $this->belongsTo(Personne::class,"personne_id");
    }

    public function postes()
    {

       return $this->belongsTo(Poste::class,"poste_id");
    }


     public function fiches_control()
    {
        return $this->hasMany('App\Models\Fiches_control');
    }

    public function fiches_paie()
    {
        return $this->hasMany('App\Models\Fiches_paie');
    }

}