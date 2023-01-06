<?php

namespace App\Models;

use App\Models\typeProduit;
use App\Models\commandeAchat;
use App\Models\commandeVente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produit extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'libelle', 'type_produits_id', 'prix', 'image', 'description', 'qtStock'];
    public function typeProduit(){
        return $this-> hasMany(typeProduit::class);
    }
    public function commandeVente(){
        return $this-> hasMany(commandeVente::class);
    }
    public function commandeAchat(){
        return $this-> hasMany(commandeAchat::class);
    }
}
