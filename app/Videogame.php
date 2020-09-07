<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
  protected $fillable = [
    'nome','piattaforma','genere','data_uscita'
  ];
}
