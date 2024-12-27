<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    protected $primaryKey = 'numter';
    protected $fillable = [
        'typeTerrain',
        'prixvente',
        'cinv',
        'titre_foncier',
        'adresse',
        'ville',
        'superficie'
    ];

    public function vendeur()
    {
        return $this->belongsTo(Vendeur::class, 'cinv');
    }

    public function dossierTerrains()
    {
        return $this->hasMany(DossierTerrain::class, 'numter');
    }
}

