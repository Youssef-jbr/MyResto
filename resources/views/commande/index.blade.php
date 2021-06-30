@extends('layouts.app')
@section('content')

<a href="/create">Créer la commande </a>
<div>
    <ul>
    @foreach ($articles as $article)
    <li> Nom de l'article <b>{{ $article->libelle }}</b> , categorie : <b>{{ $article->categorie }}</b>, prix : <b>{{ $article->prix }}</b></li>
    @endforeach
    </ul>
</div>



