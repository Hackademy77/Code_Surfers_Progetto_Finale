<x-layout>
    <div class="margin-admin"></div>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">Bentornato, nella dashboard dell' Amministratore</h1>
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