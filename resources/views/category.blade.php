@extends('layout')
@section('title', 'Category blog')
@section('content')

<div class="container">
    <div class="row">
        @forelse($posts as $post)
        <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
                <img id="img_post" src="/storage/{{$post->image}}" alt="" class="img-fluid rounded">
                <div class="blog-item-content bg-white p-5">
                    <div class="blog-item-meta bg-gray py-1 px-2">
                        <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{$post->category}}</span>
                        <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                        <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>{{$post->created_at}}</span>
                    </div>

                    <h3 class="mt-3 mb-3"><a href="{{ route('blog.more', ['id' => $post->id]) }}">{{$post->title}}</a></h3>
                    <p class="mb-4">{{Str::words($post->text,6,' ...')}}</p>

                    <a href="{{ route('blog.more', ['id' => $post->id]) }}" class="btn btn-small btn-main btn-round-full">Read More</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-lg-12 text-center">
            <div class="alert alert-danger">
                <h5>Post dari kategori ini tidak tersedia</h5>

            </div>
        </div>
        @endforelse
    </div>
</div>

@endsection



{{-- @extends('layout')
@section('title', 'Category blog')
@section('content')


<div class="container">
    <div class="row">
        
        @foreach($posts as $post)

        <div class="col-lg-6 col-md-6 mb-5">
            <div class="blog-item">
                <img id="img_post" src="/storage/{{$post->image}}" alt="" class="img-fluid rounded">
                <div class="blog-item-content bg-white p-5">
                    <div class="blog-item-meta bg-gray py-1 px-2">
                        <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{$post->category}}</span>
                        <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                        <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>{{$post->created_at}}</span>
                    </div>

                    <h3 class="mt-3 mb-3"><a href="blog-single.html">{{$post->title}}</a></h3>
                    <p class="mb-4">{{Str::words($post->text,6,' ...')}}</p>

                    <a href="{{route('blog.more')}}" class="btn btn-small btn-main btn-round-full">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- {{$posts->links()}} --}}
{{-- </div>



@endsection --}}

