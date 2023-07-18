<x-layout>
	<style>
		body{
			overflow-x: hidden;
		}
	</style>
    <div class="margin-custom mb-5">
			<div class="row">
				<div class="col-12 d-flex justify-content-center align-items-center">
					<h1 class="display-2 text-capitalize title-bycat" id="h1-category">{{$category->name}}</h1>
				</div>
			</div>
	</div>
   
    <div class="container">
		<div class="row justify-content-around">
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