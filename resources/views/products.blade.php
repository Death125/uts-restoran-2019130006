{{-- Menampilkan halaman promosi produk/layanan --}}
@extends('layouts.master')

@section('title', 'Product')

@section('carousel')
@endsection

@section('content')
    @component('components.titlebox')
        @slot('title')
            Menu
        @endslot
    @endcomponent

    <div class="container align-items-center justify-content-center mt-5 mb-4">
        <div class="row w-100 p-0 mx-auto justify-content-center">
            @forelse ($menus as $menu => $menuDescription)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3 d-flex align-items-stretch">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset($menuDescription['url']) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $menuDescription['menuName'] }}</h5>
                            <p class="card-text">Price : {{ $menuDescription['price'] }}</p>
                            <p class="card-text">Category : {{ $menuDescription['category'] }}</p>
                            <a href="#" class="btn btn-primary">Order</a>

                            <p class="card-text"><small class="text-muted">Last updated 20 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <h1 style="text-align: center">Data Kosong</h1>
            @endforelse
        </div>
    </div>

    <div class="container">
        <nav aria-label="page">
            <ul class="pagination">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item active"> <span class="page-link">
                        1
                        <span class="sr-only">(current)</span>
                    </span></li>

                <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">4</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">5</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">6</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">7</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">8</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">9</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">10</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">11</a></li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

@endsection
