{{-- Menampilkan halaman testimoni pengguna produk/layanan --}}
@extends('layouts.master')

@section('title', 'Testimonials')

@section('carousel')
@endsection

@section('content')
    @component('components.titlebox')
        @slot('title')
            Testimony
        @endslot
    @endcomponent

    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card flex-row flex-wrap">
                    <div class="card-header border-0">
                        <img src="{{ asset('assets/images/Rudi.png') }}" height="100" width="100%" alt="">
                    </div>
                    <div class="card-block px-2 my-4">
                        <h4 class="card-title">Rudi</h4>
                        <p class="card-text">THE FOOD HERE IS REALLY GOOD, SO CAN'T WAIT TO ORDER AGAIN &#128525;</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="card-footer w-100 text-muted">
                        Rating
                        <span class="p-5 m-5">
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                        </span>
                    </div>
                </div>
            </div>


            <div class="col-12 mb-3">
                <div class="card flex-row flex-wrap">
                    <div class="card-header border-0">
                        <img src="{{ asset('assets/images/Ani.png') }}" height="100" width="100%" alt="">
                    </div>
                    <div class="card-block px-2 my-4">
                        <h4 class="card-title">Ani</h4>
                        <p class="card-text">I Love the dessert, it's really good !</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="card-footer w-100 text-muted">
                        Rating
                        <span class="p-5 m-5">
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="card flex-row flex-wrap">
                    <div class="card-header border-0">
                        <img src="{{ asset('assets/images/Eliz.png') }}" height="100" width="100%" alt="">
                    </div>
                    <div class="card-block px-2 my-4">
                        <h4 class="card-title">Eliz</h4>
                        <p class="card-text">The best service !</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="card-footer w-100 text-muted">
                        Rating
                        <span class="p-5 m-5">
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="card flex-row flex-wrap">
                    <div class="card-header border-0">
                        <img src="{{ asset('assets/images/Gary.png') }}" height="100" width="100%" alt="">
                    </div>
                    <div class="card-block px-2 my-4">
                        <h4 class="card-title">Gary</h4>
                        <p class="card-text">My favorite drink is milkshake, very delicious &#128512;</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="card-footer w-100 text-muted">
                        Rating
                        <span class="p-5 m-5">
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="card flex-row flex-wrap">
                    <div class="card-header border-0">
                        <img src="{{ asset('assets/images/Eric.png') }}" height="100" width="100%" alt="">
                    </div>
                    <div class="card-block px-2 my-4">
                        <h4 class="card-title">Eric</h4>
                        <p class="card-text">Can add a new menu, namely fried duck &#128517;</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="card-footer w-100 text-muted">
                        Rating
                        <span class="p-5 m-5">
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="card flex-row flex-wrap">
                    <div class="card-header border-0">
                        <img src="{{ asset('assets/images/Miya.png') }}" height="100" width="100%" alt="">
                    </div>
                    <div class="card-block px-2 my-4">
                        <h4 class="card-title">Miya</h4>
                        <p class="card-text">I think the price of fried rice is too expensive if there is only meatball and
                            sausage stuffing. But still delicious &#128523;</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="card-footer w-100 text-muted">
                        Rating
                        <span class="p-5 m-5">
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star star-checked"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
