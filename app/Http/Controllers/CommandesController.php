<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandesController extends Controller
{
    public function index() {

        return view('commandes.index');
    }

    public function commandeAEmporter() {
        $articles = Article::all();
        $commande = new Commande();
        $commande->user_id = auth()->user()->id;
        $commande->mode_livraison = "à emporter";
        $commande->save();

        return view('commandes.a_emporter.index')->with(compact('articles', 'commande'));
    }

    public function storeArticlesCommandeAEmporter(Request $request) {
        $commande = Commande::find($request->commande_id);
        $articles = $request->input('articles');
        foreach($articles as $article){
            $commande->commandeArticles()->attach($article);
            $commande->save();
        }
        return view('commandes.a_emporter.recap')->with(compact('commande'));
    }

    public function commandeEnLivraison() {
        $articles = Article::all();
        $commande = new Commande();
        $commande->user_id = auth()->user()->id;
        $commande->mode_livraison = "en livraison";
        $commande->save();

        return view('commandes.livraison.index')->with(compact('articles', 'commande'));
    }

    public function adresseLivraison(Request $request) {
        $user = User::find(auth()->user()->id);
        $user->rue = $request->rue;
        $user->cp = $request->cp;
        $user->ville = $request->ville;
        $user->telephone = $request->telephone;
        $user->save();

        return redirect()->route('');
    }

}
