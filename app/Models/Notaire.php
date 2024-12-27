<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notaire extends Model
{
    protected $primaryKey = 'numn';
    protected $fillable = ['nom', 'prenom', 'age', 'tel', 'email', 'id_cab'];

    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class, 'id_cab');
    }

    public function dossierTerrains()
    {
        return $this->hasMany(DossierTerrain::class, 'numnotaire');
    }
}

