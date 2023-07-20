<x-layout>
    <div class="margin-custom"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="d-flex justify-content-center mb-2 align-items-center text-uppercase fw-bold mt-5">Tutti gli articoli</h1>
            </div>
        </div>
    </div>
	
	<div class="container mt-5">
		<div class="row">
			@foreach ($articles as $article)
			<div class="col-12 col-lg-6 col-md-6 col-xl-4 justify-content-center d-flex" id="overflow-card">
				<x-card 
				:article="$article"
				/>
			</div>
			@endforeach
		</div>
	</div>
	







</x-layout>