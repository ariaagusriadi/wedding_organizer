@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    Create Jasa Perushaan
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/jasa-perushaan', $product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="control-label">Title</label>
                            <input type="text"
                                class="form-control @error('title')
                                is-invalid
                            @enderror"
                                name="title" value={{ $product->title }}>
                            @error('title')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="" class="control-label">Price</label>
                                <input type="number"
                                    class="form-control @error('price')
                                    is-invalid
                                @enderror"
                                    name="price" value={{ $product->price }}>
                                @error('price')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="" class="control-label">Capacity</label>
                                <input type="number"
                                    class="form-control @error('capacity')
                                    is-invalid
                                @enderror"
                                    name="capacity" value={{ $product->capacity }}>
                                @error('capacity')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="" class="control-label">Location</label>
                                <input type="text"
                                    class="form-control @error('location')
                                    is-invalid
                                @enderror"
                                    name="location" value={{ $product->location }}>
                                @error('location')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="control-label">Image</label>
                            <input type="file" class="form-control" name="image" accept=".png, .jpg, .jpeg">
                            @error('image')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="control-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="10"
                                class="form-control @error('description')
                                is-invalid
                            @enderror">
                            {{ $product->description }}
                        </textarea>
                            @error('description')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-dark btn-block">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
