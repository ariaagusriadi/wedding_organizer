@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    Jasa Perushaan <a href="{{ url('admin/article/create') }}" class="btn btn-dark float-right"><i
                            class="fa fa-plus"></i> Create</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/article', $article->id) }}" class="btn btn-dark"><i
                                                    class="fa fa-info"></i></a>
                                            <a href="{{ url('admin/article', $article->id) }}/edit"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <form action="{{ url('admin/article', $article->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger d-inline"
                                                    onclick="return confirm('are you sure delete?')"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>{{ $article->title }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
