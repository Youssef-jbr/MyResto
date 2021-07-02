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
                <div class="row">
                    <a href="{{ route('commandes.emporter') }}" class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 mx-3 border border-white rounded mb-2
                    transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        A emporter
                    </a>
                    <a href="{{ route('commandes.livraison.adresse') }}" class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 mx-3 border border-white rounded mb-2
                    transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        Livraison
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
