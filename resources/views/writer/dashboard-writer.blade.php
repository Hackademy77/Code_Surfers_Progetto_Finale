<x-layout>
    <div class="container-fluid pt-4 bg-info text-center text-white mt-5 background-dash">
        <div class="row justify-content-center">
            <h1 class="display-3 m-5 fw-bold text-capitalize">Bentornato, {{ Auth::user()->name }}</h1>
        </div>
    </div>
    @if (session('messaggio'))
        <div class="alert message-create-dashboard text-center">
            {{session('messaggio')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-md-start">
            <div class="col-12 col-md-12">
                <h2>Articoli in attesa di revisione</h2>
                <x-table-articles-writer :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-md-start">
            <div class="col-12 col-md-12">
                <h2>Articoli pubblicati</h2>
                <x-table-articles-writer :articles="$acceptedArticles" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-md-start">
            <div class="col-12 col-md-12">
                <h2>Articoli rifiutati</h2>
                <x-table-articles-writer :articles="$rejectedArticles" />
            </div>
        </div>
    </div>
</x-layout>