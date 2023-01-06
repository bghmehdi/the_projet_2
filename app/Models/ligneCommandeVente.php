<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligneCommandeVente extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'commande_Ventes', 'produit_id', 'qt'];
}
