<?php

namespace App\Models;

use App\Models\commandeAchat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class fournisseur extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nom', 'telephone', 'email', 'ville', 'adresse'];
    public function commandeAchat(){
        return $this-> hasMany(commandeAchat::class);
    }
}
