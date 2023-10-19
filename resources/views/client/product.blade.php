@extends('client.layout.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Product</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid" src="{{ url($product->image) }}" style="object-fit: cover;"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h1 class="mb-2">{{ $product->title }}</h1>
                        <h3>Rp. {{ number_format($product->price, 2, ',', '.') }}</h3>
                        <h5>{{ $product->capacity }} Pax | {{ $product->location }}</h5>
                        <p class="mb-4 pb-2"> {{ $product->description }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
