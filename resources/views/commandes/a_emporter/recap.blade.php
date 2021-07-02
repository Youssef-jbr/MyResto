@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col justify-center min-h-screen py-24">
        <div class="flex items-center justify-center text-center">
            <div class="flex flex-col justify-around">
                <a href="{{ route('home') }}" class="content-center">
                    <i class="fas fa-utensils fa-5x text-indigo-600"></i>
                </a>
                <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-50 mb-5">
                    {{ config('app.name') }}
                </h1>
                <h3>Commande n°{{ $commande->id }}</h3>
                <h3 class="text-white mb-3">RECAPITULATIF DE LA COMMANDE</h3>
            </div>
        </div>
        <div class="w-full bg-gray-600 bg-opacity-50 text-white rounded border-1">
            <div class="text-center">
                @foreach ($commande->commandeArticles as $article)
                    <p>{{ $article->libelle }}</p>
                    <p>{{ $article->prix }}€</p>
                @endforeach
                @if ($commande->mode_livraison=="en livraison")
                    <p>Frais de livraison : 5 €</p>
                    <p>Total : {{ $commande->commandeArticles->sum('prix')+5 }}€</p>
                @else
                    <p>Total : {{ $commande->commandeArticles->sum('prix') }}€</p>
                @endif

            </div>
        </div>
        @if ($commande->mode_livraison=="en livraison")
            <div class="text-center">
                <p>Informations de livraison :</p>
                <p>Adresse de livraison : {{ $commande->user->rue }} {{  $commande->user->ville  }} {{  $commande->user->cp }}</p>
                <p>Numero de contact : {{ $commande->user->telephone }}</p>
            </div>
        @else
            <div class="text-center">
                <p>Adresse du restaurant :</p>
                <p>une rue</p>
                <p>un code postal</p>
                <p>une ville</p>
                <p>paiements acceptés : carte bancaire - espèces - tickets restaurant</p>
            </div>
        @endif

    </div>
@endsection
