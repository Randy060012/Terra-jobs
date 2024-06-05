<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description',
    ];

    // public function contrat(): HasMany
    // {
    //     return $this->hasMany(Contrat::class);
    // }
    public function contrat()
    {
        return $this->hasMany(Contrat::class);
    }
}
