<x-layoutLogin>
	<style>
		body  {
  background-image: url("https://ryansechrest.com/content/images/2022/08/how-to-set-an-animated-background-in-microsoft-teams-without-third-party-software.jpg");
  background-color: #cccccc;
  background-repeat: no-repeat;
  background-size: cover;
}
	</style>
			<div>
				
			</div>
	
    <center>
		<div style="height:160px;"></div>
<div class="container m-5 d-flex justify-content-center align-items-center" id="container">
	<div class="form-container sign-up-container">
		<form action="{{ route('register') }}" method="POST">
            @csrf
			<a href="{{route('homepage')}}"><img id="logo" class="img-fluid" src="https://th.bing.com/th/id/OIP.5EBcdJl3ADM-KQyAn25JaQHaH3?pid=ImgDet&rs=1" alt="Logo" width="18%"></a>
			<h2>Crea account</h2>
			<input type="text" name="name" placeholder="Name" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
            <input type="password" name="password_confirmation" placeholder="Conferma password" />
			<button type="submit">Registrati</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{ route('login') }}" method="POST">
			@csrf
			<a href="{{route('homepage')}}"><img id="logo" class="img-fluid" src="https://th.bing.com/th/id/OIP.5EBcdJl3ADM-KQyAn25JaQHaH3?pid=ImgDet&rs=1" alt="Logo" width="18%"></a>
			<h2>Accedi</h2>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit">Accedi</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Chi si rivede!</h1>
				<p>Se sei già registrato effettua il login</p>
				<button class="ghost" id="signIn">Accedi</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h3>Non sei registrato?</h3>
				<p>Entra nella nostra community</p>
				<button class="ghost" id="signUp">Registrati ora</button>
			</div>
		</div>
	</div>
</div>
</center>

</x-layoutLogin>