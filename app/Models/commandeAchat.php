<?php

namespace App\Models;

use App\Models\produit;
use App\Models\fournisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commandeAchat extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'dateCom', 'fournisseur_id'];
    public function fournisseur(){
        return $this->belongsTo(fournisseur::class);
    } 
    public function produit(){
        return $this->hasMany(produit::class);
    } 
}
