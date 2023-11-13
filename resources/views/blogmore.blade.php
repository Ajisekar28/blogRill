<!-- resources/views/blog-more-view.blade.php -->

@extends('layout')
@section('title', $data->title)
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="single-blog-item">
                <img src="/storage/{{ $data->image }}" alt="{{ $data->title }}" class="img-fluid rounded p-5">

                <div class="bg-white p-5" style="white-space:normal">
                    <div class="blog-item-meta bg-gray py-1 px-2">
                        <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{ $data->category }}</span>
                        <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>{{ $data->comments_count }} Comments</span>
                        <span class="text-black text-capitalize mr-3"><i class="ti-time mr-2  "></i>{{ $data->created_at->format('d F Y') }}</span>
                    </div>

                    <h2 class="mt-3 mb-4">{{ $data->title }}</h2>
                    <p class="lead mb-4">{{ $data->text }}</p>

                    <!-- Additional content or features can be added here -->
                    <hr>

                    <!-- Comment section -->
                    <div class="comments-section mt-4">
                        <h3>Comments</h3>
                        <!-- Add your comment loop or comment form here -->
                        @foreach(range(1, 3) as $index)
                        <div class="comment mb-3">
                            <div class="comment-meta">
                                <strong>John Doe</strong>
                                <span class="text-muted">2 hours ago</span>
                            </div>
                            <p>This is a static comment for demonstration purposes. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

