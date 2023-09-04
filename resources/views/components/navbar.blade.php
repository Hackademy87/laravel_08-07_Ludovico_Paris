<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Film CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('film.create')}}">Nuovo film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('film.index')}}">Tutti i film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Generi
          </a>
          <ul class="dropdown-menu">
            @foreach($generiFilm as $genere)
              <li><a class="dropdown-item" href="#">{{ $genere }}</a></li>
            @endforeach
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" action="" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul>
        @if(Auth::user() == null)
        <li class="nav-item login">
          <a class="btn btn-primary" href="{{ route('login')}}">login</a>
        </li>
        <li class="nav-item login">
          <a class="btn btn-secondary" href="{{ route('register')}}">registrati</a>
        </li> 
        @else 
        <li class="nav-item login">
          {{ Auth::user()->name }} 
          {{-- ({{ Auth::user()->profile->role }}) --}}
        </li> 
        <li class="nav-item login" >
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-secondary mx-2" >Logout</button>
          </form>
        </li>
      @endif
      </ul>
    </div>
  </div>
</nav>