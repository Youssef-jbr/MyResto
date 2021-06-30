@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="flex flex-col justify-center min-h-screen">
        <div class="flex items-center justify-center text-center">
            <div class="flex flex-col justify-around">
                <a href="{{ route('home') }}" class="content-center">
                    <i class="fas fa-utensils fa-5x text-indigo-600"></i>
                </a>

                <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-50 mb-5">
                    {{ config('app.name') }}
                </h1>
                @auth
                    <a href="" class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 border border-white rounded mb-2">
                        Commander
                    </a>
                @endauth

                {{-- <a data-toggle="collapse" href="#menu" role="button" aria-expanded="false" aria-controls="menu"
                class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 border border-white rounded">
                    Notre menu
                </a> --}}
                <button class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 border border-white rounded mb-3"
                type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false">
                    Notre menu
                  </button>

            </div>

        </div>
        <div class="collapse mx-6" id="collapseExample">
            <div class="w-full bg-gray-600 bg-opacity-50 text-white rounded border-1">
                @include('menu')
            </div>
          </div>
    </div>
@endsection



