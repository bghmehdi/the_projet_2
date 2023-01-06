<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligneCommandeAchat extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'commande_achats_id', 'produit_id'];
}
