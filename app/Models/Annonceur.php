<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonceur extends Model
{
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'adresse',
    ];



    

    public function ServicePublicitaire()
    {
        return $this->hasMany(ServicePublicitaire::class, 'annonceur_id', 'annonceur_id');
    }
    public function DossierAnnonce()
    {
        return $this->hasMany(DossierAnnonce::class);
    }
    public function Publication()
    {
        return $this->hasManyThrough(
            Publication::class,      //La table destination qu'on veut atteindre
            DossierAnnonce::class,   //La table intermédiaire
            'annonceur_id',          // clé etrangere dans dossier_annonces qui pointe vers annonceurs
            'dossier_annonce_id',    // clé etrangere dans publications qui pointe vers dossier_annonces
            'id',                    //clé primaire de la table annonceurs (table actuelle)
            'id'                     //clé primaire de la table dossier_annonces (table intermédiaire)
        );
    }

    // hasManyThrough car 1 DossierAnnonce peut avoir plusieurs StatutValidation
    public function StatutValidation()
    {
        return $this->hasManyThrough(
            StatutValidation::class,
            DossierAnnonce::class,
            'annonceur_id',  // clé etrangere sur dossier_annonces
            'dossier_annonce_id', // clé etrangere sur statut_validations
            'id',            // clé primaire  locale
            'id'             // clé primaire  de DossierAnnonce
        );
    }

}
