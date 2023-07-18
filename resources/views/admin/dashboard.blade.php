<x-layout>
    <div class="margin-admin"></div>
    <div class="container-fluid pt-5 bg-info text-center text-white mt-5 background-dash">
        <div class="row justify-content-center">
            <h1 class="display-3 fw-bold">Bentornato, nella dashboard dell' Amministratore</h1>
        </div>
    </div>

 @if (session('messaggio'))
        <div class="alert message-create-dashboard text-center">
            {{session('messaggio')}}
        </div>
    @endif


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Categorie piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie" />
                <form class="d-flex" action="{{route('admin.storeCategory')}}" method="POST">
                @csrf
                <input type="text" name="name" class="form-control me-2" placeholder="Inserisci Cat." id="">
                <button type="submit" class="btn btn-success text-white fw-bold text-uppercase">Aggiungi </button>
                </form>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Tags piattaforma in uso</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di AMMINISTRATORE</h2>
                <x-request-table :roleRequests="$adminRequests" role="amministratore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di REVISORE</h2>
                <x-request-table :roleRequests="$revisorRequests" role="revisore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di REDATTORE</h2>
                <x-request-table :roleRequests="$writerRequests" role="redattore" />
            </div>
        </div>
    </div>
</x-layout>