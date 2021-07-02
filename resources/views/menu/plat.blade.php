<div class="row items-center justify-center">
    @foreach ($articles as $article)
        @if ($article->categorie == "Plat")
            <div class="mx-auto bg-gray-200 bg-opacity-25 rounded-xl shadow-md overflow-hidden w-96">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-48 rounded-full object-cover md:w-48" src="{{ asset('data/menu img/plats/' . $article->photo) }}" alt="">
                    </div>
                    <div class="p-8">
                        <div class="block mt-4 text-lg leading-tight font-medium text-white">{{ $article->libelle }}</div>
                        <p class="mt-2 text-white"><strong>{{ $article->prix }}€</strong></p>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
