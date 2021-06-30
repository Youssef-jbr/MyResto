<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function entrees(){
        $articles = Article::where('categorie', 'like', 'Entrée');

        return view('menu.entree')->with(compact('articles'));
    }

    public function plats(){
        $articles = Article::where('categorie', 'like', 'Plat');

        return view('menu.plat')->with(compact('articles'));
    }

    public function desserts(){
        $articles = Article::where('categorie', 'like', 'Dessert');

        return view('menu.dessert')->with(compact('articles'));
    }

    public function boissons(){
        $articles = Article::where('categorie', 'like', 'Boisson');

        return view('menu.boisson')->with(compact('articles'));
    }
}
