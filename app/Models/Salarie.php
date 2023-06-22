<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'entité',
        'email',
        'poste_actuel',
        'poste_occupe',
        'capacité',
        'id_poste',
        'performance',
    ];

    public function poste()
    {
        return $this->belongsTo(Poste::class, 'foreign_key');
        $salarie = Salarie::find(1);
    }
}
