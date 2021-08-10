<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'flag'
    ];


    public function personnesStatus()
    {
        return $this->belongsToMany('App\Models\Personne');
    }
}