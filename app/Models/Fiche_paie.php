<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche_paie extends Model
{
    use HasFactory;

    protected $fillable = [
        'periode_paie',
        'datepaie',
        'prime',
        'detail_prime',
        'cotisations',
        'montant_paie',
        'modepaiement',
        'accusereception',
        'status_payement',
        'flag'

    ];

    public function contractfiche_paie()
    {

       return $this->belongsTo(Contract::class,"contract_id");
    }
}