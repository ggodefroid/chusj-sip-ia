<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{ route('home')}}"><i class="fas fa-home"></i></a>
    <a class="navbar-brand" href="{{ route('mission') }} ">Mission</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Les membres</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Répertoire</a>
            <a class="dropdown-item" href="{{route('register')}}">Devenir Membre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Recherche</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('recherche')}} ">Axes de recherche</a>
            <a class="dropdown-item" href="{{ route('infrastructure')}} ">Infrastructures de recherche et développement</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('financement') }} ">Financement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('db') }}">Bases de données</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Innovations</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Aide à la décision clinique</a>
            <a class="dropdown-item" href="#">Autres algorithmes</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('articles')}}">Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        @if (Auth::user())
          @if (Auth::user()->role === 'ADMIN')
          <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.index')}}" class="btn btn-info">Espace admin</a>
          </li>
          @endif
        <li class="nav-item active">
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn">Déconnexion</button>
          </form>
        </li>
        @else
        <li class="nav-item active">
          <a class="nav-link" href="{{route('login')}}">Se connecter</a>
        </li>
        @endif 
      </ul>
    </div>
  </div>
</nav>