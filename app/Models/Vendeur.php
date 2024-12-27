<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    protected $primaryKey = 'cinv';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['cinv', 'nom', 'prenom', 'adresse', 'ddn', 'tel'];

    public function terrains()
    {
        return $this->hasMany(Terrain::class, 'cinv');
    }
}

