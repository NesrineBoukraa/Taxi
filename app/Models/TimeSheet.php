<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TimeSheet extends Model
{
    protected $fillable = [
        'datedebut',
        'datefin',
        'heuredebut',
        'heurefin',
        'service_publicitaire_id',
        'panneau_publicitaire_id',
    ];

    public function servicePublicitaire(): BelongsTo
    {
        return $this->belongsTo(ServicePublicitaire::class);
    }

    public function panneauPublicitaire(): BelongsTo
    {
        return $this->belongsTo(PanneauPublicitaire::class);
    }

    protected function casts(): array
    {
        return [
            'datedebut' => 'date',
            'datefin' => 'date',
        ];
    }
}
