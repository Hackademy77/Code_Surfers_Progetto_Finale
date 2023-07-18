<x-layout >
    <body id="body-login">
        <div class="margin-custom" ></div>
            <div class="main">
                <input type="checkbox" id="chk" aria-hidden="true">

                <div class="signup">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <label for="chk" aria-hidden="true">Registrati</label>
                        <input id="input" class="@error('name') is-invalid @enderror" type="text" name="name" placeholder="User name">
                        <input id="input" type="email" name="email" placeholder="Email">
                        <input id="input" type="password" name="password" placeholder="Password">
                        <input id="input" type="password" name="password_confirmation" placeholder="Conferma password">
                        <button id="button">Registrati</button>
                    </form>
                </div>

                <div class="login">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <label for="chk" aria-hidden="true">Login</label>
                        <input id="input" type="email" name="email" placeholder="Email" required="">
                        <input id="input" type="password" name="password" placeholder="Password" required="">
                        <button class="" id="button">Login</button>
                    </form>
                </div>
            </div>
        <div class="margin-custom"></div>
    </body>
</x-layout>