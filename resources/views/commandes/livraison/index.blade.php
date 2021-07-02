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
                <h3 class="text-white mb-3">Veuillez composer votre commande :</h3>
            </div>
        </div>
        <div class="w-full bg-gray-600 bg-opacity-50 text-white rounded border-1">
            <form action="{{ route('commandes.articlesLivre.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center py-3">
                    @include('commandes.menu')
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-800 w-56 text-white text-center font-bold py-2 px-4 mx-3 border border-white rounded mb-2
                    transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        Valider la commande
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
