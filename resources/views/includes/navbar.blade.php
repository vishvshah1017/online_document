<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Online Document</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               {{-- <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>--}}
                @if (Auth::check())
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Product
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item product" href="{{ route('products_show') }}">Product Show</a></li>
                    <li><a class="dropdown-item product" href="{{ route('products_create') }}">Product Create</a></li>
                    <li><hr class="dropdown-divider"></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Product Field
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                      <li><a class="dropdown-item product field" href="{{ route('product_field_show') }}">Product field Show</a></li>
                      <li><a class="dropdown-item product field" href="{{ route('product_field_create') }}">Product Field Create</a></li>
                      <li><hr class="dropdown-divider"></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                      <li><a class="dropdown-item users" href="{{ route('users_show') }}">User Show</a></li>

                      <li><hr class="dropdown-divider"></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Themes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                      <li><a class="dropdown-item themes" href="{{ route('themes_show') }}">Themes Show</a></li>
                      <li><a class="dropdown-item themes" href="{{ route('themes_create') }}">Themes Create</a></li>
                      <li><hr class="dropdown-divider"></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      User Product Data
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                      <li><a class="dropdown-item user_product_data" href="{{ route('user_product_data_show') }}">User Product Data Show</a></li>
                      <li><a class="dropdown-item themes" href="{{ route('user_product_data_create') }}">User Product Data Create</a></li>
                      <li><hr class="dropdown-divider"></li>
                    </ul>
                  </li>
                  @endif
              </ul>
              {{-- @if(Auth::check() && Auth::user()->type  == "admin")
              // Admin menu bar
           @elseif (Auth::check())
              // User menu bar --}}


           @if (Auth::check())





            @if (Route::has('logout'))
                <a class="btn btn-outline-success btn-lg float-right"
                    href="{{ route('logout') }}">{{ __('Logout') }}</a>
            @endif


            @else
            <form class="d-flex">


                @if (Route::has('login'))
                    <a class="btn btn-outline-success  me-2 btn-lg float-right"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
                    <a class="btn btn-outline-success btn-lg float-right"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </form>
           @endif




        </div>
    </div>
</nav>
