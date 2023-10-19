@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    Show Article
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url($article->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h3>{{ $article->title }}</h3>
                            <p>{{ $article->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
