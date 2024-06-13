<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'annee',
        'poste',
        'description',
        'utilisateur_id',
    ];

    public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
