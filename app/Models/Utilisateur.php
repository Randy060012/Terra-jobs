<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'mdp',
        'nom',
        'prenom',
        'telephone',
        'image',
        'cv',
        'adresse',
        'niveau',
        'specialite',
    ];

    public function education(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function experience(): HasMany
    {
        return $this->hasMany(Experience::class);
    }
}
