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
                <h3>Veuillez remplir votre adresse de livraison :</h3>
            </div>
        </div>
    </div>
@endsection
