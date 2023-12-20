<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    use HasFactory;
  
        protected $fillable = ['nom', 'prenom', 'password', 'etablissement', 'villeEtablissement', 'haut_niveau'];
        // Add '_token' if you want to include it in $fillable
}
