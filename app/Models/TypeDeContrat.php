<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeDeContrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description',
    ];

}
