<x-layout>
    <div class="margin-custom"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="mb-4">Lavora con noi</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3>Lavora come amministratore</h3>
            <p class="mb-2">Che cosa farai? Avrai accesso senza limiti a tutte le funzionalità del sito</p>
            <h3>Lavora come revisore</h3>
            <p class="mb-2">Che cosa farai? Dovrai controllare che gli articoli rispettino le norme e non siano fake news</p>
            <h3>Lavora come scrittore</h3>
            <p class="mb-2">Che cosa farai? Offrirai le tue capacità di scrittura al nostro portale</p>
        </div>
    </div>
    
    <div class="col-12 col-md-6">
        @if($errors->any())
        <div class="alert-danger alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    
    <form action="{{route('careers.submit')}}" method="post" enctype= "multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label mt-4">Seleziona il ruolo...</label>
            <select name="role" id="role" class="form-control">
                <option value="">Scegli qui</option>
                <option value="admin">Amministratore</option>
                <option value="revisor">Revisore</option>
                <option value="writer">Redattore</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Parlaci di te</label>
            <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Invia la tua candidatura</button>
    </form>
</div>

</x-layout>