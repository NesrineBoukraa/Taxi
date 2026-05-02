<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StatutValidation extends Model
{
    protected $fillable = [
        'libelle',
        'datevalidation',
        'commentaire',
        'dossier_annonce_id',
    ];

    public function dossierAnnonce(): BelongsTo
    {
        return $this->belongsTo(DossierAnnonce::class);
    }

    protected function casts(): array
    {
        return [
            'datevalidation' => 'date',
        ];
    }
}
