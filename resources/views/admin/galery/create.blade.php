@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">
                    Galery Foto
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/galery-foto') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="control-label">Title</label>
                            <input type="text"
                                class="form-control @error('title')
                                is-invalid
                            @enderror"
                                name="title">
                            @error('title')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="control-label">Image</label>
                            <input type="file"
                                class="form-control @error('image')
                                is-invalid
                            @enderror"
                                name="image" accept=".jpg, .png, .jpeg">
                            @error('image')
                                <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-dark btn-block">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
