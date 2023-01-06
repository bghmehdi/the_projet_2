<?php

namespace App\Models;

use App\Models\produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class typeProduit extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'libelle'];

    public function produit(){
        return $this->hasMany(produit::class);
    } 
}
