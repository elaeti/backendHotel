<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_cmd',
        'type_cmd',
        'details_cmd',
        'validation',
        'client',
        'flag'

    ];

    public function personnescommond()
    {

       return $this->belongsTo(Personne::class,"personne_id");
    }

}