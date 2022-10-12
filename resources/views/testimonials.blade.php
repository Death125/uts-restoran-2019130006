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
            @forelse ($testimony as $testimonial => $testimonials)
                <div class="col-12 mb-3">
                    <div class="card flex-row flex-wrap">
                        <div class="card-header border-0">
                            <img src="{{ asset($testimonials['img_url']) }}" height="100" width="100%" alt="">
                        </div>
                        <div class="card-block px-2 my-4">
                            <h4 class="card-title">{{ $testimonials['nama'] }}</h4>
                            <p class="card-text">{{ $testimonials['comment'] }} {{ $testimonials['emoji'] }}</p>
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
            @empty
                <h1 style="text-align: center">Data Kosong</h1>
            @endforelse
        </div>
    </div>

    <div class="container mt-2 mb-4">
        <a href="#" type="button" class="btn btn-primary btn-lg btn-block">See More</a>
    </div>
@endsection
