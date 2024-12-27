<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    // Specify the custom primary key
    protected $primaryKey = 'id_cab';
    
    // If you're not using auto-incrementing IDs, set incrementing to false
    public $incrementing = true;

    protected $fillable = ['nom', 'adresse', 'tel', 'ville'];

    public function notaires()
    {
        return $this->hasMany(Notaire::class, 'id_cab');
    }
}
