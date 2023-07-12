<x-layout>
    <div class="margin-custom"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-2">{{$user->name}}</h1>
            </div>
        </div>
    </div>
    {{-- <div class="container">
		<div class="row justify-content-around">
			@foreach ($articles as $article)
			<div class="col-md-4 col-12">
				<div class="card">
					<img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine articolo">
					<div class="card-body">
						<h5 class="card-title">{{$article->title}}</h5>
						<p class="card-text">{{$article->subtitle}}</p>
					</div>
					<div class=" d-flex justify-content-between align-items-center">
						<p>{{$article->category->name}}</p>
						<a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi l'articolo completo</a>
					</div>
				</div>
			</div>
			@endforeach	
		</div>
	</div> --}}
	@foreach ($articles as $article)
	<div class="col-12 col-md-3 justify-content-center d-flex">
		<x-card 
			:article="$article"
		/>
	</div>
@endforeach

</x-layout>