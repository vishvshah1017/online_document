<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Online Document</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">



          @if (Route::has('products_show'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products_show') }}">Product</a>
          </li>
          @endif
          @if (Route::has('product_field_show'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product_field_show') }}">ProductField</a>
          </li>
          @endif
          @if (Route::has('themes_show'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('themes_show') }}">Themes</a>
          </li>
          @endif
          @if (Route::has('users_show'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('users_show') }}">Users</a>
          </li>
          @endif
          @if (Route::has('user_product_data_show'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user_product_data_show') }}">User product data</a>
          </li>
          @endif


        </ul>
        <form class="d-flex">


          @if (Route::has('login'))

              <a class="btn btn-outline-success me-2" href="{{ route('login') }}">{{ __('Login') }}</a>

          @endif

          @if (Route::has('login'))

          <a class="btn btn-outline-success" href="{{ route('register') }}">{{ __('Register') }}</a>

          @endif
        </form>
      </div>
    </div>
  </nav>
