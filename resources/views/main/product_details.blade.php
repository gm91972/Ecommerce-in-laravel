<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XStore - ProductPage</title>

    <base href="/public">

    <link rel="stylesheet" href="{{ asset('Home/css/main.css') }}" type="text/css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap icons links -->
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .checked {
            color: orange;
        }

        .status {
            font-weight: 600;
            font-size: 22px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed">

        <!-- Off canvas Side Navbar toggle hamburger -->
        <button class="btn btn-light mx-3" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            &#9776;
        </button>
        <!-- Off canvas Side Navbar toggle hamburger -->

        <div class="container">
            <!-- Logo on the left -->
            <a class="navbar-brand logo my-2" href="{{url('/')}}">XStore</a>

            <!-- Search bar in the middle -->
            <form class="d-flex mx-auto" action="" method="post">
                <input class="form-control me-2 col-lg-5" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
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
                <a href="{{ ('main/cart') }}" class="btn btn-light position-relative cart-btn">
                    <i class="bi bi-cart"></i>
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

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light main-nav-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>

                        <li class="nav-link">> Product Page </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">

                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0 w-50 h-50" src="product/{{$product->image}}" alt="..." /></div>

                <div class="col-md-5">
                    <h1 class="display-5 fw-bolder">{{$product->name}}</h1>
                    <div class="fs-5 mb-5">
                        <span>Rs. {{$product->price}}</span>
                        <span class="mx-5 status">InStock</span>
                    </div>
                    <p class="lead">Category: {{$product->category}}</p>
                    <div class="d-flex">

                        <form action="{{url('add_to_cart', $product->id)}}" method="post">
                            @csrf
                            <input class="btn btn-outline-dark flex-shrink-0" type="submit" value="Add to Cart">
                        </form>
                    </div>
                    <div class="stars my-4">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>