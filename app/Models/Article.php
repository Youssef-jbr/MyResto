<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function articleCommandes(){
        return $this->belongsToMany('App\Models\Commande', 'articles_commandes');
    }

}
