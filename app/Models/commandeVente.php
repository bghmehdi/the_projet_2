<?php

namespace App\Models;

use App\Models\Client;
use App\Models\produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commandeVente extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'dateCom', 'client_id'];
    
    public function client(){
        return $this-> belongsTo(Client::class);
    }
    public function produit(){
        return $this->belongsToMany(produit::class, 'ligne_commande_ventes', 'commande_ventes_id')->withPivot('qt' , 'id');
    } 
}
