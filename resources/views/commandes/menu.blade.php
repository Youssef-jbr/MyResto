<h3 class="mt-2">Notre Menu</h3>
<div class="w-full border-1 rounded border-white mb-3">
    <div class="accordion text-black" id="accordion">
        <div class="card bg-transparent">
            <div class="card-header" id="headingEntrees">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-white text-center" type="button" data-toggle="collapse" data-target="#entrees" aria-expanded="true" aria-controls="collapseOne">
                <strong>Entrées</strong>
                </button>
            </h2>
            </div>
            <div id="entrees" class="collapse show" aria-labelledby="headingEntrees" data-parent="#accordion">
            <div class="card-body">
                @include('commandes.menu.entree')
            </div>
            </div>
        </div>
        <div class="card bg-transparent">
            <div class="card-header" id="headingPlats">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-white text-center collapsed" type="button" data-toggle="collapse" data-target="#plats" aria-expanded="false" aria-controls="plats">
                    <strong>Plats</strong>
                </button>
            </h2>
            </div>
            <div id="plats" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                @include('commandes.menu.plat')
            </div>
            </div>
        </div>
        <div class="card bg-transparent">
            <div class="card-header" id="headingDesserts">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-center text-white collapsed" type="button" data-toggle="collapse" data-target="#desserts" aria-expanded="false" aria-controls="desserts">
                    <strong>Desserts</strong>
                </button>
            </h2>
            </div>
            <div id="desserts" class="collapse" aria-labelledby="headingDesserts" data-parent="#accordion">
            <div class="card-body">
                @include('commandes.menu.dessert')
            </div>
            </div>
        </div>
        <div class="card bg-transparent">
            <div class="card-header" id="headingBoissons">
                <h2 class="mb-0">
                <button class="btn btn-link btn-block text-white text-center" type="button" data-toggle="collapse" data-target="#boissons" aria-expanded="false" aria-controls="boissons">
                    <strong>Boissons</strong>
                </button>
                </h2>
            </div>
            <div id="boissons" class="collapse" aria-labelledby="headingBoissons" data-parent="#accordion">
                <div class="card-body">
                    @include('commandes.menu.boisson')
                </div>
            </div>
            </div>
    </div>
</div>

