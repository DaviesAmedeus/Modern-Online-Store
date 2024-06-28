<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient  p-5">
    <div class="container">

      <a class="navbar-brand" href="{{ route('home.index') }}"><strong>Modern Online Store</strong></a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('home.about') }}">About</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">Products</a>
          </li>
          
        </ul>
        <form action="{{ route('product.index') }}" class="d-flex">
          <input class="form-control me-2" type="search" name="search" placeholder="Search product..." aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>

        
        <div class="ms-auto nav-item dropdown">
          <a class="btn btn-outline-primary bg-gradient text-white" href="{{ route('account.cart.index')}}">My Cart  <span class="badge ms-2 bg-light text-dark">10</span></a>
        </div>
     
        
        <div class="ms-auto nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hello, {{ Auth::check() ? Auth::user()->getName() : "Visitor"}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            @guest
            <li><a class="dropdown-item" href="{{ route('login') }}">Login/Register</a></li>
            @else

            @if (Auth::user()->getRole() == 'admin')
            <li><a class="dropdown-item" href="{{ route('admin.home.index') }}">Go to Admin dashboard</a></li>
            @endif

            <li><a class="dropdown-item" href="{{ route('account.product.index') }}">My Account</a></li>
            <li><hr class="dropdown-divider"></li>
            <form id="logout" action="{{ route('logout') }}" method="POST">
            <li><a class="dropdown-item" onclick="document.getElementById('logout').submit();">Logout</a></li>
            @csrf
          </form>
            @endguest
          </ul>
        </div>
      </div>

    </div>
  </nav>
