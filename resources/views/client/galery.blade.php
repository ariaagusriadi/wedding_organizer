@extends('client.layout.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Galery</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                @foreach ($galery as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="{{ url($item->image) }}" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                    href="{{ url($item->image) }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                            </div>
                        </div>
                        <div class="pt-3">
                            <hr class="text-primary w-25 my-2">
                            <p class="text-primary mb-0">{{ $item->title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
