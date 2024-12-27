<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierTerrain extends Model
{
    protected $primaryKey = 'iddossier';
    protected $fillable = [
        'date_ouverture',
        'date_cloture',
        'numter',
        'numnotaire',
        'etat'
    ];

    public function terrain()
    {
        return $this->belongsTo(Terrain::class, 'numter');
    }

    public function notaire()
    {
        return $this->belongsTo(Notaire::class, 'numnotaire');
    }
}

