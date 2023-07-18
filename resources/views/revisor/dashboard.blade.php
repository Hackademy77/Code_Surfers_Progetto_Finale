<x-layout>
    <div class="container-fluid pt-5 bg-info text-center text-white mt-5">
        <div class="row justify-content-center">
            <h1 class="display-1">Bentornato, nella dashboard del Revisore</h1>
        </div>
    </div>
    @if (session('messaggio'))
        <div class="alert message-create-dashboard text-center">
            {{session('messaggio')}}
        </div>
    @endif

    <div class="container-fluid my-5">
        <div class="row justify-content-md-start">
            <div class="col-12 col-md-12">
                <h2>Articoli da revisionare</h2>
                <x-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row justify-content-md-start">
            <div class="col-12 col-md-12">
                <h2>Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row justify-content-md-start">
            <div class="col-12 col-md-12">
                <h2>Articoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>

</x-layout>