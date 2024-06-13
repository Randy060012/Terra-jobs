<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'slug',
    ];

    public function contrats()
    {
        return $this->hasMany(Contrat::class);
    }
}
