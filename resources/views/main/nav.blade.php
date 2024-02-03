<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed">

  <!-- Off canvas Side Navbar toggle hamburger -->
  <button class="btn btn-light mx-3" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
    &#9776;
  </button>
  <!-- Off canvas Side Navbar toggle hamburger -->

  <div class="container">
    <!-- Logo on the left -->
    <a class="navbar-brand logo my-2" href="#">XStore</a>

    <!-- Search bar in the middle -->
    <form class="d-flex mx-auto" action="{{url('product_search')}}" method="get">
      @csrf
      <input class="form-control me-2 col-lg-5" type="search" name="search" placeholder="Search" aria-label="Search">
      <input type="submit" value="Search" class="btn btn-outline-light">
    </form>

    <!-- Login, Register, and Cart buttons on the left -->
    <div class="d-flex align-items-center mx-5 my-2">

      @if (Route::has('login'))

      @auth
      
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <input type="submit" value="Logout" class="btn btn-outline-light mx-4">
        
      </form>
      @else
      <a class="btn btn-outline-light login-btn me-2" href="{{ route('login') }}">Login</a>

      <a class="btn btn-outline-light register-btn me-2" href="{{ route('register') }}">Register</a>

      @endauth

      @endif
      <a href="{{url('cart') }}" class="btn btn-light position-relative cart-btn">
        <i class="bi bi-cart"></i>
        <!-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
          0
        </span> -->
      </a>

    </div>
  </div>
  <!-- <a class="btn btn-outline-light mx-2" href="#"><i class="bi bi-cart"></i></a> -->
</nav>

<!-- Off canvas Side Navbar -->


<div class="offcanvas offcanvas-start offcanvas-collapse" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel"> <a class="navbar-brand mx-4" href="#">XStore</a></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>

  <ul class="list-unstyled ps-0 border-top mx-5">
    <h6 class="my-2">CATEGORIES</h6>
    <li class="mb-1 mx-3 my-3">
      <a href="#wireless earbuds" class="navbar-brand">Wireless Earbuds</a>
    </li>

    <li class="mb-1 mx-3 my-3">
      <a href="#mobiles" class="navbar-brand">Mobiles</a>
    </li>

    <li class="mb-1 mx-3 my-3">
      <a href="#laptops" class="navbar-brand">Laptops</a>
    </li>

    <li class="mb-1 mx-3 my-3">
      <a href="#accessories" class="navbar-brand">Accessories</a>
    </li>
  </ul>

</div>