<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | King's Restaurant</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">King's Restaurant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('products') ? 'active' : '' }}"
                            href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('testimonials') ? 'active' : '' }}"
                            href="{{ route('testimonials') }}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                </ul>
                {{-- <span class="navbar-text">
                    Navbar text with an inline element
                </span> --}}
            </div>
        </nav>
        @section('carousel')
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('assets/images/restaurantview.jpg') }}" alt="First slide"
                            height="600">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><b>King's Restaurant</b></h5>
                            <p>Join us, you will get the best service, beautiful views that you can enjoy and a wide variety
                                of dishes will make you never satisfied to keep trying</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('assets/images/restaurantTable.jpg') }}"
                            alt="Second slide" height="600">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('assets/images/Food.png') }}" alt="Third slide"
                            height="600">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>
    @show

    <main>
        @yield('content')
    </main>

    <footer></footer>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
