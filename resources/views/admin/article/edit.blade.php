@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    Create Article
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/article', $article->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="control-label">Title</label>
                            <input type="text"
                                class="form-control @error('title')
                                is-invalid
                            @enderror"
                                name="title" value="{{ $article->title }}">
                            @error('title')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
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
                            @enderror">{{ $article->description }}</textarea>
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
