<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mode_livraison',
        'prix',

    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function articlesCommande(){
        return $this->hasMany('App\Models\ArticlesCommande');
    }
}
