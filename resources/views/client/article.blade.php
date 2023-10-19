@extends('client.layout.app')

@section('content')
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid" src="{{ url($article->image) }}" style="object-fit: cover;"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h1 class="mb-2">{{ $article->title }}</h1>
                        <p class="mb-4 pb-2"> {{ $article->description }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
