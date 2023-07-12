<x-layout>
	
	<section id="home" class="hero-area bg_cover">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-lg-9 col-xl-9 col-md-10">
					<div class="text-center hero-content">
						@if (Auth::user() != null)
						<h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Bentornato: {{ Auth::user()->name }}</h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">inserisci un articolo dal bottone qua sotto </p></br>
						@else
						<h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Benvenuto su Post#2</h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">Politica,economia,sport...</p></br>
						@endif
						@auth
						<a href="{{ route('article.create') }}" rel="nofollow" class="main-btn btn-hover">INSERISCI UN ARTICOLO</a>
						@endauth
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="search-area">
		<div class="container">
			<div class="search-wrapper">
				<form action="#">
					<div class="row justify-content-center">
						<center><h2>Cerca articoli...</h2></center>
						<div class="col-lg-3 col-sm-5 col-10">
							<div class="search-input">
								<label for="keyword"><i class="fa-solid fa-magnifying-glass" style="color: #ff6b6b;"></i></label>
								<input type="text" name="keyword" id="keyword" placeholder="Cerca...">
							</div>
						</div>
						<div class="col-lg-3 col-sm-5 col-10">
							<div class="search-input">
								<label for="category"><i class="lni lni-grid-alt theme-color"></i></label>
								<select name="category" class="form-select">
									<option value="0" selected disabled>Categorie...</option>	
									@foreach ($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
								
							</div>
						</div>
						<div class="col-lg-2 col-sm-5 col-10">
							<div class="search-btn">
								<button class="main-btn btn-hover" type="submit">Ricerca<i class="fa-brands fa-searchengin fa-beat" style="color: #ffffff;"></i></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<center><h2 class="mt-5">ULTIMI ARTICOLI <i class="fa-solid fa-fire-flame-curved fa-fade" style="color: #ff6b6b;"></i></h2></center>
	
	
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
	
	<div class="vh-100"></div>
	
	
</x-layout>