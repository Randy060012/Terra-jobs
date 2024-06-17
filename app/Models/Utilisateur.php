<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
