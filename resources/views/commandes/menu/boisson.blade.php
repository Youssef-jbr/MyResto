<div class="row items-center justify-center">
    @foreach ($articles as $article)
        @if ($article->categorie == "Boisson")
            <div class="mx-auto bg-gray-200 bg-opacity-25 rounded-xl shadow-md overflow-hidden w-96">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <img class="h-24 w-24 rounded-full object-cover my-auto md:w-48 md:h-48" src="{{ asset('data/menu img/boissons/' . $article->photo) }}" alt="">
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
