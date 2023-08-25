@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <h5 class="mb-4">By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
            @if($post->image)
                <div style="max-height:350px;overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
            {{-- <img src="
                @php
                    if($post->category->name === "Web Programming"){
                        echo"http://localhost:8000/assets/img/web-programing2.jpg";
                    }else if($post->category->name === "Web Design"){
                        echo"http://localhost:8000/assets/img/web-design2.jpg";
                    }else{
                        echo"http://localhost:8000/assets/img/personal2.jpg";
                    }
                @endphp
            " class="card-img-top" alt="{{ $post->category->name }}"> --}}
            <div class="my-3 fs-5" style="text-align: justify;">{!! $post->body !!}</div>
            <a href="\posts" class="text-decoration-none d-block">Back to post</a>
        </div>
    </div>
@endsection