<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiches_control extends Model
{
    use HasFactory;
    protected $fillable = [
        'heur_arrive',
        'heur_depart',
        'heur_sup',
        'presence',
        'absence',
        'permission',
        'avance_salaire',
        'motif_avance_salaire',
        'periode',
        'infraction',
        'motif_infraction',
        'avertissement',
        'motif_avertissement',
        'flag'

    ];


    public function contractfiche_control()
    {

       return $this->belongsTo(Contract::class,"contract_id");
    }

}