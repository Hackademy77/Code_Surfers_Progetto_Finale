<x-layout>
    <div class="margin-custom"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <center><h1>Tutti gli articoli</h1></center>
            </div>
        </div>
    </div>
	
	<div class="container mt-5">
		<div class="row">
			@foreach ($articles as $article)
			<div class="col-12 col-lg-4 col-md-3 justify-content-center d-flex">
				<x-card 
				:article="$article"
				/>
			</div>
			@endforeach
		</div>
	</div>
	







</x-layout>