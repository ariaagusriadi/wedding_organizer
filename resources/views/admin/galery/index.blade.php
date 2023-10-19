@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    Galery Foto<a href="{{ url('admin/galery-foto/create') }}" class="btn btn-dark float-right"><i
                            class="fa fa-plus"></i> Create</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Title</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galery as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <form action="{{ url('admin/galery-foto', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" onclick="return confirm('are you sure delete?')"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td><img src="{{ url($item->image) }}" alt="" width="200px" class="img-fluid">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
