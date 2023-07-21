<x-layout>
    <style>
        body{
            background-color: #f9efd7;
            background: rgb(255,255,255);
            background: linear-gradient(174deg, rgba(255,255,255,1) 29%, rgba(249,239,215,1) 66%);
        }
        #img-card-work {
            background:  linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url(https://images-ext-2.discordapp.net/external/tdhn2LQAidah5YogmUNtNPCPYHXBK0lX-g9Vmvu60rc/https/www.ristorare.eu/wp-content/uploads/2016/08/lavora_con_noi-1.jpg?width=1440&height=601);
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 6px;
            }
        
    </style>
    <div class="margin-careers"></div>
    
    <div class="container-fluid vh-50 bg-mail">
        <div class="row">
            <div class="col-12 col-md-12 d-flex text-center flex-column justify-content-center align-items-center mx-1 my-lg-5 py-lg-5 mt-5" style="padding-top: 63px;">
                <h1 style="color: #f9efd7" class="text-uppercase display-1 fw-bold ">Lavora con noi</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
                    <div class="col-12 col-md-4 grid-03">
                                <div class="grid-card  gtm-grid-container">
                                        <div class="grid-image">
                                            <img src="https://www.ziprecruiter.com/svc/fotomat/public-ziprecruiter/cms/813002086BusinessAdministrator.jpg" id="img-card-work">
                                        </div>
                                          <h3 class="subtitle font-sans-display-3 gtm-grid-title fw-bold text-uppercase my-2">Amministratore</h3>
                                          <p class="mb-3 text-dark">Che cosa farai? Avrai accesso senza limiti a tutte le funzionalità del sito</p>
                                        <a class="alleanza-text-button right-button button- gtm-grid-link" href="#" title="">
                                            <span></span>
                                        </a>
                                </div>              
                    </div>
                    <div class="col-12 col-md-4 grid-03">
                                <div class="grid-card  gtm-grid-container">
                                        <div class="grid-image">
                                            <img src="https://static-r.giuffre.it/QUOTIDIANO/Lavoro/uomo%20pc%20da%20casa.jpg" id="img-card-work">
                                        </div>
                                                                            <h3 class="subtitle font-sans-display-3 gtm-grid-title fw-bold text-uppercase my-2">Revisore</h3>
                                                                            <p class="mb-3 text-dark">Che cosa farai? Dovrai controllare che gli articoli rispettino le norme e non siano fake news</p>
                                        <a class="alleanza-text-button right-button button- gtm-grid-link" href="#" title="">
                                            <span></span>
                                        </a>
                                </div>              
                    </div>
                    <div class="col-12 col-md-4 grid-03">
                                <div class="grid-card  gtm-grid-container">
                                        <div class="grid-image">
                                            <img src="https://www.kivodaily.com/wp-content/uploads/2023/02/Stocksy_woman-writing-laptop_476082-57ab432d3df78cf459975331.jpg" id="img-card-work">
                                        </div>
                                                <h3 class="subtitle font-sans-display-3 gtm-grid-title fw-bold text-uppercase my-2">Redattore</h3>
                                                <p class="mb-3 text-dark">Che cosa farai? Offrirai le tue capacità di scrittura al nostro portale</p>
                                        <a class="alleanza-text-button right-button button- gtm-grid-link" href="#" title="">
                                            <span></span>
                                        </a>
                                </div>              
                    </div>
        </div>            
    </div>
        <div class="background">
            <div class="container container-mail">
                <div class="col-12 col-md-12">
                    @if($errors->any())
                    <div class="alert-danger alert d-flex justify-content-start">
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
                            <img src="/img/we-are-hiring-2161926-1816232-removebg-preview.png" class="img-fluid" width="100%" id="margin-mail" alt="">
                        </div>
                        <div class="screen-body-item">
                            <form action="{{route('careers.submit')}}" method="post" enctype= "multipart/form-data">
                                @csrf
                                <div class="app-form">
                                    <div class="app-form-group">
                                        <select name="role" id="role" class=" app-form-control">
                                            <option value="" class="text-dark">Seleziona il ruolo</option>
                                            <option value="admin" class="text-dark">Amministratore</option>
                                            <option value="revisor" class="text-dark">Revisore</option>
                                            <option value="writer" class="text-dark">Redattore</option>
                                        </select>
                                    </div>
                                    <div class="app-form-group mt-5">
                                        <input class="app-form-control input-mail" type="email" id="email" name="email" placeholder="EMAIL" value="{{old('email') ?? Auth::user()->email}}">
                                    </div>
                                    <div class="app-form-group message">
                                        <textarea name="message" id="message" cols="30" rows="7" placeholder="Messaggio" class="app-form-control">{{old('message')}}</textarea>
                                    </div>
                                    <div class="app-form-group buttons">
                                        <button class="app-form-button button-mail fs-5" type="submit">INVIA  <i class="fa-solid fa-envelope"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>