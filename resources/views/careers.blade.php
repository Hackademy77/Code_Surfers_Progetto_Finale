<x-layout>
    <div class="margin-custom" ></div>
    <center>
        <h1 class="mb-5">Lavora con noi</h1>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h3>Lavora come amministratore</h3>
                    <p class="mb-3">Che cosa farai? Avrai accesso senza limiti a tutte le funzionalità del sito</p>
                    <h3>Lavora come revisore</h3>
                    <p class="mb-3">Che cosa farai? Dovrai controllare che gli articoli rispettino le norme e non siano fake news</p>
                    <h3>Lavora come scrittore</h3>
                    <p class="mb-3">Che cosa farai? Offrirai le tue capacità di scrittura al nostro portale</p>
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
            <div class="background">
                <div class="container container-mail">
                    <div class="screen">
                        <div class="screen-header">
                            <div class="screen-header-left">
                                <div class="screen-header-button close"></div>
                                <div class="screen-header-button maximize"></div>
                                <div class="screen-header-button minimize"></div>
                            </div>
                            <div class="screen-header-right">
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                            </div>
                        </div>
                        <div id="container" class="screen-body">
                            <div class="screen-body-item left">
                                <div class="app-title">
                                    <span>CONTATTACI</span>
                                </div>
                            </div>
                            <div class="screen-body-item">
                                <form action="{{route('careers.submit')}}" method="post" enctype= "multipart/form-data">
                                    @csrf
                                    <div class="app-form">
                                        <div class="app-form-group">
                                            <input class="app-form-control input-mail" type="email" id="email" name="email" placeholder="EMAIL" value="{{old('email') ?? Auth::user()->email}}">
                                        </div>
                                        <div class="app-form-group">
                                            <select name="role" id="role" class=" app-form-control">
                                                <option value="">Seleziona il ruolo</option>
                                                <option value="admin">Amministratore</option>
                                                <option value="revisor">Revisore</option>
                                                <option value="writer">Redattore</option>
                                            </select>
                                        </div>
                                        <div class="app-form-group message">
                                            {{-- <input class="app-form-control input-mail" placeholder="MESSAGE"> --}}
                                            <textarea name="message" id="message" cols="30" rows="7" placeholder="Messaggio" class="app-form-control">{{old('message')}}</textarea>
                                        </div>
                                        <div class="app-form-group buttons">
                                            <button class="app-form-button button-mail fs-5" type="submit">INVIA</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
</x-layout>