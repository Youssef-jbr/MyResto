<div class="row items-center justify-center">
    @foreach ($articles as $article)
        @if ($article->categorie == "Entrée")
            <div class="card mx-4 my-3" style="width: 18rem;">
                <img src="..." class="card-img-left" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->libelle }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endif
    @endforeach
</div>

