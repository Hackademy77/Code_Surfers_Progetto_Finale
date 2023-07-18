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
            <div class="col-md-12 col-12 d-flex justify-content-center margin-custom">
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
            <div class="col-0 col-md-2"></div>
            <div class="">
                <p class="text-dark mt-2 text-custom-show d-flex justify-content-start mb-4">{{$article->body}}</p>
            </div>
            <div class="col-0 col-md-2"></div>
        </div>
    </div>
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
                    <div class="col-12 col-md-6 d-flex justify-content-start align-items-center">
                        @if (Auth::user() && Auth::user()->is_revisor)
                <a class="text-white btn button-62 me-1 buttom-custom-rev" href="{{ route('revisor.acceptArticle', compact('article'))}}">Accetta articolo <i class="ms-2 fa-solid fa-check" style="color: #ffffff;"></i></a>
                <a class="text-white btn button-62 buttom-custom-rev" href="{{ route('revisor.rejectArticle', compact('article'))}}">Rifiuta articolo <i class="ms-2 fa-solid fa-xmark" style="color: #ffffff;"></i></a>
                @endif
                    </div>
                <div class="col-12 col-md-6 mt-5 mb-5 d-flex justify-content-end">
                    
                    @if (Auth::user() && Auth::user()->is_revisor)
                    <a href="{{route('revisor.dashboard')}}" class="btn text-dark button-62 text-white">Torna alla Dashboard</a>
                    @else
                    <a href="{{route('homepage')}}" class="btn text-dark button-62 text-white">Torna alla Homepage</a>
                    @endif
                    
                </div>	
                </div>
            </div>
    </div>
</div>

</x-layout>