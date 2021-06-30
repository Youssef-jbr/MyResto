<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlesCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id',
        'article_id',
        'qte',
    ];


    public function commande(){
        return $this->belongsTo('App\Models\Commande');
    }

    public function article(){
        return $this->belongsTo('App\Models\Article');
    }
}
