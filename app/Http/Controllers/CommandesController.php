<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CommandesController extends Controller
{
    public function index() {

        return view('commandes.index');
    }

    public function commandeAEmporter() {
        $articles = Article::all();
        return view('commandes.a_emporter.index')->with(compact('articles'));
    }

    public function storeArticlesCommandeAEmporter(Request $request) {
        $commande = new Commande();
        $commande->user_id = auth()->user()->id;
        $commande->mode_livraison = "à emporter";
        $commande->save();
        $articles = $request->input('articles');
        foreach($articles as $article){
            $commande->commandeArticles()->attach($article);
            $commande->save();
        }
        return view('commandes.recap')->with(compact('commande'));
    }

    public function commandeEnLivraison() {
        $articles = Article::all();
        return view('commandes.livraison.menu')->with(compact('articles'));
    }

    public function storeArticlesCommandeEnLivraison(Request $request) {
        $commande = new Commande();
        $commande->user_id = auth()->user()->id;
        $commande->mode_livraison = "en livraison";
        $commande->save();
        $articles = $request->input('articles');
        foreach($articles as $article){
            $commande->commandeArticles()->attach($article);
            $commande->save();
        }
        return view('commandes.recap')->with(compact('commande'));
    }

}
