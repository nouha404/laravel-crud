<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Eleve extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'eleve';

    //ici au inclus ou exclus les champ pour les données qu'on veut dans notre db:
    protected $fillable = [
         'nom',
         'prenom',
         'tuteur',
         'sexe',
         'age',
         'adresse'
     ];
}
