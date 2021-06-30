{{-- @extends('layout.app')
@section('content') --}}

<div>
    <ul>
    @foreach ($articles as $article)
    <li> Nom de l'article <b>{{ $article->libelle }}</b> , categorie : <b>{{ $article->categorie }}</b>, prix : <b>{{ $article->prix }}</b></li>
    @endforeach
    </ul>
</div>

{{-- @endsection
 --}}
