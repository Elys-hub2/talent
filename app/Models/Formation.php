<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom' ,
        'prénom',
        'sexe',
        'age',
        'lieu_formation',
        'date_debut',
        'date_fin',
        'h_présence',
        'heures',
        'cours',
        'prix',
        'reussite',
       
    ];

            
}
