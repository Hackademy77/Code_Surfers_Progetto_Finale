<x-layout>
    <div class="margin-custom"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="display-2">{{$article->title}}</h1>
            </div>
			<div class="col-md-6 col-12">
				<img src="{{Storage::url($article->image)}}" alt="Immagine articolo">
			</div>
        </div>
    </div>
    <div class="container">
        <div class="row">
			

					
					
						<p class="card-text">{{$article->subtitle}}</p>
						<p class="fst-italic small">{{$article->category->name}}</p>
					
					<div class=" d-flex justify-content-between align-items-center">
						Redatto il: {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                        <p>{{$article->body}}</p>
						<a href="{{route('homepage')}}" class="btn btn-info text-white">Torna indietro</a>
					</div>
			
			
		</div>
	</div>







</x-layout>