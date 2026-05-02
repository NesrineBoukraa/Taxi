<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PanneauPublicitaire extends Model
{
    protected $fillable = [
        'nompanneau',
        'largeur',
        'hauteur',
        'disponible',
        'service_publicitaire_id',
    ];

    public function servicePublicitaire(): BelongsTo
    {
        return $this->belongsTo(ServicePublicitaire::class);
    }
    public function timeSheets()
    {
        return $this->hasMany(TimeSheet::class, 'panneau_publicitaire_id', 'service_publicitaire_id');
    }
    protected function casts(): array
    {
        return [
            'disponible' => 'boolean',
        ];
    }
}
