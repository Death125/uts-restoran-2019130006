{{-- Menampilkan halaman utama --}}

@extends('layouts.master')

@section('title', 'Home')

@section('carousel')
    @parent
@endsection

@section('content')
    {{-- Introduction --}}
    <div class="py-2 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">King's Restaurant</h1>
                <p class="lead text-muted font-lucida"> There are so many choices of food and drinks that you can try at
                    affordable
                    prices. What are you waiting for ? let's order now!</p>
            </div>
        </div>
    </div>

    <div class="container align-items-center justify-content-center mb-4">
        <div class="row w-100 p-0 mx-auto " style="width: 100%;">
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 mb-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/images/frontrestaurant.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Welcome to King's Restaurant</h5>
                        <p class="card-text text-justify">Our restaurant opened in 2018, it's been 5 years since our
                            restaurant was founded, from a small restaurant to growing to this big ...</p>
                        <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 mb-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/images/testimonials.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Testimony</h5>
                        <p class="card-text text-justify">Get to know us more from the testimonials of consumers who have
                            ordered and
                            come to our restaurant.</p>
                        <a href="{{ route('testimonials') }}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 mb-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/images/menu.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Our Menu</h5>
                        <p class="card-text text-justify">The menu that we provide is very diverse, ranging from
                            appetizers,
                            desserts,
                            and drinks.</p>
                        <a href="{{ route('products') }}" class="btn btn-primary">View our menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
