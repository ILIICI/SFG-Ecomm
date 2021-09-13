<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Item 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Item 2</a>
        </li>
      </ul>
      <span class="navbar-text">
              @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 sm:block">
                      @auth
                          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                          @endif
                      @endauth
                  </div>
              @endif
      </span>
      <span class="navbar-text">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            @if (Session::has('cart'))
            <li class="nav-item">
              <a class="nav-link" href="shoppingcart">
                <i class='fas fa-shopping-cart'></i>Shopping cart <span style="color:red;">{{Session::has('cart') ?
                          Session::get('cart')->totalQty : ""}}</span>
              </a>
            </li>
            @endif
        </ul>
      </span>
    </div>
  </div>
</nav>