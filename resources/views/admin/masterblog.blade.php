@extends('admin.layout')
@section('title', 'Master Blog')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-shadow" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">@yield('content title')</h3>
                        <a href="{{route('admin.create')}}" class="btn btn-success">Add Post</a>
                    </div>
                    @if(Session::has('message'))
                    <div class="alert alert-primary mt-2">
                        {{session('message')}}
                    </div>
                    @elseif(Session::has('error'))
                    <div class="alert alert-danger mt-2">
                        {{session('error')}}
                    </div>
                    @endif

                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Article</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($datas->isEmpty())
                                <tr>
                                    <td colspan="6">
                                        <div class="alert alert-danger mt-2">Data tidak tersedia</div>
                                    </td>
                                </tr>
                            @else
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{substr($data->text,0,50) }}...</td>
                                    <td>{{$data->category}}</td>
                                    <td><img width=100px src="/storage/{{$data->image}}" alt=""></td>
                                    <td>
                                        <div class=" d-flex justify-content-center">
                                            <a href="{{route('admin.edit', $data->id)}}" class="btn btn-warning mr-2">Edit</a>
                                            <form action="{{route('admin.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini? ')" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                            {{$datas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

