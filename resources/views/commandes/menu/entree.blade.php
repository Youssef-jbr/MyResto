<div class="row items-center justify-center">
    @foreach ($articles as $article)
        @if ($article->categorie == "Entrée")
            <div class="max-w-md mx-auto bg-gray-200 bg-opacity-25 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-36 w-36 rounded-full object-cover md:w-48 md:h-48" src="{{ asset('data/menu img/entrees/' . $article->photo) }}" alt="">
                    </div>
                    <div class="p-8">
                        <div class="block mt-4 text-lg leading-tight font-medium text-white">{{ $article->libelle }}</div>
                        <p class="mt-2 text-white"><strong>{{ $article->prix }}€</strong></p>
                        <input type="checkbox" name="articles[]" class="bg-gray-300 checked:bg-blue-600 w-24 checked:border-transparent rounded" value="{{ $article->id }}">
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>

