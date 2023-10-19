@extends('client.layout.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Article</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">New Article</h6>
            </div>
            <div class="row g-4">
                @foreach ($articles as $article)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="{{ $article->image }}" alt="">
                            <div class="position-relative p-4 pt-2">
                                <h4 class="mb-3">{{ $article->title }}</h4>
                                <p>{{ str_word_count($article->description) > 60 ? substr($article->description, 0, 100) . '...' : $article->description }}</p>
                                <a class="small fw-medium" href="{{ url('artikel', $article->id) }}">Read More<i
                                        class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
