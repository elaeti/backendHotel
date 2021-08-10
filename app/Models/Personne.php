<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref',
        'user_id',
        'photo',
        'Idcard',
        'nom',
        'prenom',
        'genre',
        'email',
        'telephone',
        'adresse',
        'nationalite',
        'flag'

    ];

    public function contracts()
    {
        return $this->hasMany('App\Models\Contract');
    }

    public function commandes()
    {
        return $this->hasMany('App\Models\Commande');
    }

    public function statusPersonne()
    {
        return $this->belongsToMany('App\Models\Status');
    }

}