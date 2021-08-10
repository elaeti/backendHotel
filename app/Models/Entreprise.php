<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'raison_social',
        'siege_social',
        'status_juric',
        'logo',
        'adresse',
        'contact',
        'rc',
        'ninea',
        'iban',
        'bank',
        'flag'

    ];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }


    public function annexes()
    {
        return $this->hasMany('App\Models\Annex');
    }

}