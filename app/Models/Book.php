<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //Relacion de uno a uno 

    public function author(){
        return $this->belongsTo('App\Models\Author');
    }

    public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }
    
    public function editorial(){
        return $this->belongsTo('App\Models\Editorial');
    }
}
