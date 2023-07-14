<x-layout>
    <div class="margin-custom"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-2 d-flex justify-content-center">Autore: {{$user->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            
	@foreach ($articles as $article)
    <div class="col-12 col-md-4">
		<x-card 
			:article="$article"
		/>
    </div>
@endforeach

</div>
</div>

</x-layout>