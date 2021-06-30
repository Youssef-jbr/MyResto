<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlesCommande extends Model
{
    use HasFactory;


    public function commande(){
        return $this->belongsTo('App\Models\Commande');
    }

    public function article(){
        return $this->belongsTo('App\Models\Article');
    }
}
