<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index(){
        $articles=Article::all();
        return view('commande.index',compact('articles'));
    }
    public function create(){
        $articles=Article::all();
        return view('commande.create',compact('articles'));
    }
    public function store(Commande $commande){

        return back();
    }

    private function commandeValidator(){

    }
}
