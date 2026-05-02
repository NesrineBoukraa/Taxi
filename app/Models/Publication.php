<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Publication extends Model
{
    protected $fillable = [
        'titre',
        'contenu',
        'datepublication',
        'actif',
        'urlmedia',
        'dossier_annonce_id',
    ];

    public function dossierAnnonce(): BelongsTo
    {
        return $this->belongsTo(DossierAnnonce::class);
    }

    

    protected function casts(): array
    {
        return [
            'datepublication' => 'date',
            'actif' => 'boolean',
        ];
    }
}
