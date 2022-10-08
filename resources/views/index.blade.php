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
                <p class="lead text-muted"> There are so many choices of food and drinks that you can try at affordable
                    prices. What are you waiting for ? let's order now!</p>
            </div>
        </div>
    </div>
@endsection
