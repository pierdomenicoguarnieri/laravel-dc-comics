<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="/img/logo.png" alt="Bootstrap" width="30">
      </a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
          <a class="nav-link {{str_contains('comics', Route::currentRouteName()) ? 'active' : ''}}" href="{{route('comics')}}">Dashboard</a>
        </div>
      </div>
    </div>
  </nav>
</header>
