@extends('dashboard.layouts.main')

@section('container')
    <div class="row my-4">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <a href="/dashboard/posts/" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            @if($post->image)
                <div style="max-height:350px;overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-4" alt="{{ $post->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-4" alt="{{ $post->category->name }}">
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
            " class="card-img-top mt-4" alt="{{ $post->category->name }}"> --}}
            <div class="my-3 fs-5" style="text-align: justify;">{!! $post->body !!}</div>
        </div>
    </div>
@endsection