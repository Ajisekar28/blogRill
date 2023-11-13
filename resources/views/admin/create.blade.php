@extends('admin.layout')

@section('title', 'Create Post')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-shadow" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                <div class="card-header">
                    <div class="card-tools mb-2">
                        <a href="{{ route('admin.index')}}" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
                <div class="card-body">

                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Post</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="text">About</label>
                            <textarea name="text" class="form-control" rows="3">{{old('text')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Choose a Category:</label>
                            <select name="category" id="category" class="form-control">
                                <option value="" disabled selected>Select a Category</option>
                                <option value="education">Education</option>
                                <option value="technology">Technology</option>
                                <option value="lifestyle">Lifestyle</option>
                                <option value="job">Job</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image  </label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection