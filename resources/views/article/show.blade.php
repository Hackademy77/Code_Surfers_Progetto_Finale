<x-layout>
    <style>
        body{
            background-color: #f9efd7;
            background: rgb(255,255,255);
            background: linear-gradient(174deg, rgba(255,255,255,1) 29%, rgba(249,239,215,1) 66%);
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12 d-flex justify-content-center">
                <img src="{{Storage::url($article->image)}}" alt="Immagine articolo" width="100%">
            </div>
            <div class="col-12 col-md-12 justify-content-start mt-3 d-flex">
                <h1 class="display-2 fw-semibold text-dark">{{$article->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <p class="card-text display-5 d-flex justify-content-start text-dark">{{$article->subtitle}}</p>
            </div>
            <div class="col-0 col-md-2"></div>
            <div class="col-12 col-md-12 border-top border-1 border-dark mt-3 mb-3"></div>
            <div class="col-12 col-md-12 d-flex justify-content-center">
                <p class="text-dark mt-2 text-custom-show">{{$article->body}}</p>
            </div>
            <div class="col-0 col-md-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class=" category-custom text-dark d-flex justify-content-start">Categoria: <a href="{{route('filter.category', ['category' =>$article->category->id])}}" class="mx-1">{{$article->category->name}}</a></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="auth-show d-flex justify-content-end">Redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('filter.user', ['user' =>$article->user->id])}}" class="text-capitalize details-custom mx-1">{{$article->user->name}}</a></p> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 d-flex justify-content-center-start align-items-end">
                        @if (Auth::user() && Auth::user()->is_revisor)
                <a class="text-dark btn button-62 me-1 buttom-custom-rev" href="{{ route('revisor.acceptArticle', compact('article'))}}">Accetta articolo</a>
                <a class="text-dark btn button-62 buttom-custom-rev" href="{{ route('revisor.rejectArticle', compact('article'))}}">Rifiuta articolo</a>
                @endif
                    </div>
                <div class="col-12 col-md-6 mt-5 d-flex justify-content-end">
                    <a href="{{route('revisor.dashboard')}}" class="btn text-dark button-62">Torna indietro</a>
                </div>	
                   
                </div>
                
                
            </div>
        </div>
        
    </div>
</div>







</x-layout>