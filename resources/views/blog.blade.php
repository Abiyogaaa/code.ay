@extends('layouts.main')

@section('container')
    <div class="container py-5">
        <h1 class="display-4 text-center mb-5">{{ $title }}</h1>

        <!-- Search Bar -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-6">
                <form action="/blog">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg rounded-pill rounded-end"
                            placeholder="Search posts..." name="search" value="{{ request('search') }}">
                        <button class="btn btn-dark rounded-pill rounded-start px-4" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @if ($posts->count())
            <!-- Featured Post -->
            <div class="featured-post mb-5">
                <div class="card border-0 shadow-lg overflow-hidden">
                    <div class="position-relative">
                        @if ($posts[0]->image)
                            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top featured-img"
                                alt="{{ $posts[0]->category->name }}">
                        @else
                            <img src="{{ asset('img/CODE.AY.svg') }}" class="img-fluid mt-2"
                                alt="{{ $posts[0]->category->name }}">
                        @endif
                        <div class="category-badge position-absolute top-0 start-0 m-3">
                            <a href="/blog?category={{ $posts[0]->category->slug }}"
                                class="badge bg-dark text-white text-decoration-none px-3 py-2">
                                {{ $posts[0]->category->name }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body text-center p-5">
                        <h2 class="card-title mb-3">
                            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark fw-bold">
                                {{ $posts[0]->title }}
                            </a>
                        </h2>
                        <div class="text-muted mb-3">
                            <a href="/blog?author={{ $posts[0]->author->username }}"
                                class="text-decoration-none text-muted">
                                {{ $posts[0]->author->name }}
                            </a>
                            <span class="mx-2">•</span>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </div>

                        <p class="card-text lead mb-4">{{ $posts[0]->excerpt }}</p>

                        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-dark btn-lg rounded-pill px-4">
                            Read more <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Other Posts Grid -->
            <div class="row g-4">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm hover-card">
                            <div class="position-relative">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top post-img"
                                        alt="{{ $post->category->name }}">
                                @else
                                    <img src="{{ asset('img/CODE.AY.svg') }}" class="img-fluid mt-2"
                                        alt="{{ $post->category->name }}">
                                @endif
                                <a href="/blog?category={{ $post->category->slug }}"
                                    class="category-pill position-absolute top-0 start-0 m-3 badge bg-dark text-white text-decoration-none">
                                    {{ $post->category->name }}
                                </a>
                            </div>

                            <div class="card-body p-4">
                                <h5 class="card-title mb-3">
                                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">
                                        {{ $post->title }}
                                    </a>
                                </h5>
                                <div class="text-muted small mb-3">
                                    <a href="/blog?author={{ $post->author->username }}"
                                        class="text-decoration-none text-muted">
                                        {{ $post->author->name }}
                                    </a>
                                    <span class="mx-2">•</span>
                                    {{ $post->created_at->diffForHumans() }}
                                </div>
                                <p class="card-text text-muted">{{ $post->excerpt }}</p>
                            </div>
                            <div class="card-footer bg-transparent border-0 p-4 pt-0">
                                <a href="/posts/{{ $post->slug }}" class="btn btn-outline-dark rounded-pill">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-journal-x display-1 text-muted mb-4"></i>
                <p class="lead text-muted">No posts found</p>
            </div>
        @endif

        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-5">
            {{ $posts->links() }}
        </div>
    </div>

    <style>
        .featured-img {
            height: 400px;
            object-fit: cover;
        }

        .post-img {
            height: 200px;
            object-fit: cover;
        }

        .hover-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .category-pill {
            border-radius: 30px;
            padding: 8px 16px;
            font-size: 0.875rem;
            backdrop-filter: blur(5px);
        }

        /* Custom styling for pagination */
        .pagination {
            gap: 5px;
        }

        .page-link {
            border-radius: 50%;
            padding: 8px 16px;
            border: none;
            color: #333;
        }

        .page-item.active .page-link {
            background-color: #212529;
            color: white;
        }

        /* Search bar focus effect */
        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(33, 37, 41, 0.15);
            border-color: #212529;
        }
    </style>
@endsection
