<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand in" href="#">CV- in</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-4 mb-lg-0 text-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#layanan">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tips">Tips & Trik CV</a>
        </li>
        
      </ul>
      <form class="d-flex">
        @if (Route::has('login'))
                
                    @auth
                        
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success me-2">Sign in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Sign up</a>
                        @endif
                    @endauth
               
            @endif
        
        
      </form>
    </div>
  </div>
</nav>