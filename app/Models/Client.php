<?php

namespace App\Models;

use App\Models\commandeVente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'ville', 'adresse'];
    public function commandeVente(){
        return $this->hasMany(commandeVente::class);
    } 
}
