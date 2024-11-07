@extends('dashboard.layout.main')

@section('container')
    <br>
    <div class="container">
        <div class="row mb-5 mx-3">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span>Delete</button>
                </form>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-fluid mt-3"
                        alt="{{ $post->category->name }}" width="690" height="400">
                @else
                    <img src="{{ asset('img/WebDevelopment.jpg') }}" class="card-fluid mt-3"
                        alt="{{ $post->category->name }}" width="690" height="400">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
