<header class="header_area">
  <div id="header_navbar" class="header_navbar sticky">
    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-xl-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">
              <img id="logo" class="img-fluid w-25" src="https://th.bing.com/th/id/OIP.5EBcdJl3ADM-KQyAn25JaQHaH3?pid=ImgDet&rs=1" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
              <ul id="nav" class="navbar-nav">
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == 'homepage') active @endif" href="/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == '#') active @endif" data-toggle="collapse" data-target="#sub-nav1" aria-controls="sub-nav1"
                    aria-expanded="false" aria-label="Toggle navigation" href="javascript:void(0)">CHI SIAMO
                  </a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == 'article.index') active @endif" data-toggle="collapse" data-target="#sub-nav" aria-controls="sub-nav"
                    aria-expanded="false" aria-label="Toggle navigation" href="{{route('article.index')}}">ARTICOLI
                  </a>
                </li>
                @auth
                @if (Auth::user()->is_admin)
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == 'admin.dashboard') active @endif" data-toggle="collapse" data-target="#sub-nav" aria-controls="sub-nav"
                    aria-expanded="false" aria-label="Toggle navigation" href="{{route('admin.dashboard')}}">ADM
                  </a>
                </li>
                @endif
                @endauth
                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                  <a class="page-scroll @if(Route::currentRouteName() == 'revisor.dashboard') active @endif" data-toggle="collapse" data-target="#sub-nav" aria-controls="sub-nav"
                    aria-expanded="false" aria-label="Toggle navigation" href="{{route('revisor.dashboard')}}">REV
                  </a>
                </li>
                @endif
                @endauth
                <div class="dropdown">
                  <li class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">CATEGORIE</li>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
               
              </ul>
            </div>
            <ul class="header-btn d-md-flex">
              @if (Auth::user() != null)
              <li>
                <a href="#" class="main-btn account-btn">
                  <i class="fa-regular fa-user"></i>
                  <span class="d-none d-md-block">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-nav">
                  <li><a href="#" class="fw-bold">I MIEI ANNUNCI</a></li>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                  <li><button type="submit" class="btn fw-bold ">LOGOUT <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i> </button></li>
                </form>
                </ul>
              </li>
              @else
              <a href="{{ route('login') }}"  class=" main-btn btn-hover d-none d-md-block fw-bold mt-2 mx-2">ACCEDI &nbsp; <i class="fa-solid fa-user"></i></a>
              @endif
              <li>
                <a href="{{route('careers')}}" class="main-btn btn-hover d-none d-md-block fw-bold mt-3">LAVORA CON NOI &nbsp; <i class="fa-solid fa-briefcase"></i></a>
              </li>
            </ul>
          </nav> <!-- navbar -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- header navbar -->
</header>