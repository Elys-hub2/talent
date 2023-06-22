<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'poste',
        'mission',
        'activités',
        'compétences',
    ];

    public function salaries()
    {
        return $this->hasMany(Salarie::class, 'foreign_key', 'local_key');
        $salaries = Poste::find(1)->salaries;
    }
    

}
