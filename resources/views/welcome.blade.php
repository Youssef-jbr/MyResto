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
                @auth
                    <a href="{{ route('commandes.index') }}" class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 border border-white rounded mb-2
                    transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        Commander
                    </a>
                @endauth

                {{-- <a data-toggle="collapse" href="#menu" role="button" aria-expanded="false" aria-controls="menu"
                class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 border border-white rounded">
                    Notre menu
                </a> --}}
                <button class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 border border-white rounded mb-3
                transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false">
                    Notre menu
                  </button>

            </div>

        </div>
        <div class="collapse mt-2" id="collapseExample">
            <div class="w-full bg-gray-600 bg-opacity-50 text-white rounded border-1">
                @include('menu.index')
            </div>
        </div>
    </div>
@endsection



