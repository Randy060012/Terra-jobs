<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'domaine_id',
        'type_de_contrat_id',
        'titre',
        'description',
        'image',
        'fichier',
        'date_limite',
        'categorie_id'
    ];

    public function domaine(): BelongsTo
    {
        return $this->belongsTo(Domaine::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function typeContrat(): BelongsTo
    {
        return $this->belongsTo(TypeDeContrat::class);
    }

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
}
