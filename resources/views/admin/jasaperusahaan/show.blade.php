@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    Show Jasa Perusahaan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url($product->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h3>{{ $product->title }}</h3>
                            <h5>Rp. {{ number_format($product->price, 2, ',', '.') }}</h5>
                            <h6>{{ $product->capacity }} Pax | {{ $product->location }} </h6>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
