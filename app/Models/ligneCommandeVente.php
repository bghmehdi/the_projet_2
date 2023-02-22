<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligneCommandeVente extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'commande_ventes_id', 'produit_id', 'qt'];


}
