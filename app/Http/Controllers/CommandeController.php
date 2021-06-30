<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticlesCommande;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index(){
        //On récupére tout les articles présent en base et on les envoies dans la vue index
        $articles=Article::all();
        return view('commande.index',compact('articles'));
    }
    public function create(){
        //On récupére tout les articles présent en base et on les envoies dans la vue create
        $articles=Article::all();
        return view('commande.create',compact('articles'));
    }
    public function store(Commande $pCommande,Request $request){
        /*On récupére tous les articles que le client souhaite ajouter, ainsi que les données nécéssaire
        a la création d'une commande.
        Puis on crée une commande dans un premier temps et on associe tout les articles du panier à celle-ci
        */
        $commande = Commande::create($this->commandeValidator($pCommande));

        foreach ($request['articlecommande'] as $article){
            $ligneCommande= ArticlesCommande::create($this->articleCommandeValidator($article));
        }
        return back();


    }

    private function commandeValidator($request){
        return $request->validate([
            'user_id' => 'required|integer',
            'mode_livraison' => 'required',
            'prix' => 'required'
        ]);
    }

    private function articleCommandeValidator($request){
        return $request->validate([
            'commande_id' => 'required|integer',
            'article_id' => 'required|integer',
            'qte' => 'required|integer'
        ]);
    }
}
