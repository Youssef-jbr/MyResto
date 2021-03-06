@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col items-center justify-center min-h-screen py-24">
        <div class="flex items-center justify-center text-center">
            <div class="flex flex-col justify-around">
                <a href="{{ route('home') }}" class="content-center">
                    <i class="fas fa-utensils fa-5x text-indigo-600"></i>
                </a>
                <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-50 mb-5">
                    {{ config('app.name') }}
                </h1>
                <h3 class="text-white mb-3">Veuillez indiquer votre adresse de livraison :</h3>
            </div>
        </div>
        <div class="w-full md:w-1/2 px-3 bg-gray-600 bg-opacity-50 text-white rounded border-1">
            <form action="{{ route('commandes.livraison.adresse.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-center py-3">
                    @include('commandes.livraison.adresse-form')
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-800 w-56 text-white text-center font-bold py-2 px-4 mx-3 border border-white rounded mt-3 mb-2
                    transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        Valider l'adresse
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
