<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    
    //Relacion de uno a uno 

    public function book(){
        return $this->hasOne('App\Models\Book');
    }
}
