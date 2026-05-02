<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DossierAnnonce extends Model
{
    protected $fillable = [
        'datecreation',
        'annonceur_id',
        'service_publicitaire_id',
    ];

    public function annonceur(): BelongsTo
    {
        return $this->belongsTo(Annonceur::class);
    }

    public function publication()
    {
        return $this->hasOne(Publication::class);
    }

    public function statutValidation()
    {
        return $this->hasOne(StatutValidation::class);
    }

    protected function casts(): array
    {
        return [
            'datecreation' => 'date',
        ];
    }
}
