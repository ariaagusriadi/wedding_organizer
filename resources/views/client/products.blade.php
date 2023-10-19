@extends('client.layout.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Product</h1>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Product</h6>
                <h1 class="mb-4">Product dan Jasa Yang di Tawarkan</h1>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="rounded overflow-hidden">
                            <img class="img-fluid" src="{{ url($product->image) }}" alt="">
                        </div>
                        <div class="pt-3">
                            <p class="text-primary mb-0">Weding </p>
                            <hr class="text-primary w-25 my-2">
                            <a href="{{ url('product', $product->id) }}">
                                <h5 class="lh-base">{{ $product->title }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
