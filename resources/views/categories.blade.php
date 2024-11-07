@extends('layouts.main')

@section('container')
    <div class="container py-5">
        <h2 class="display-4 text-center mb-5">Post Categories</h2>

        <div class="row g-4">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/blog?category={{ $category->slug }}" class="text-decoration-none category-link">
                        <div class="card category-card border-0 rounded-4 shadow-sm">
                            <img src="{{ $category->slug === 'web-programming'
                                ? 'https://images.unsplash.com/photo-1627398242454-45a1465c2479'
                                : ($category->slug === 'web-design'
                                    ? 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e'
                                    : ($category->slug === 'personal'
                                        ? 'https://images.unsplash.com/photo-1512486130939-2c4f79935e4f'
                                        : 'https://images.unsplash.com/photo-1451187580459-43490279c0fa')) }}"
                                class="card-img rounded-4" alt="{{ $category->name }}" width="1200" height="400">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <div class="overlay-content text-center flex-fill p-4">
                                    <h5 class="card-title display-6 mb-2">{{ $category->name }}</h5>
                                    <p class="card-text mb-0">Explore articles</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="/blog" class="btn btn-lg btn-outline-dark px-5 rounded-pill">
                <i class="bi bi-arrow-left me-2"></i>Back to Posts
            </a>
        </div>
    </div>

    <style>
        .category-card {
            transition: all 0.4s ease;
            overflow: hidden;
        }

        .category-card img {
            object-fit: cover;
            height: 300px;
            transition: all 0.4s ease;
        }

        .category-link:hover .category-card {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15) !important;
        }

        .category-link:hover img {
            transform: scale(1.1);
        }

        .overlay-content {
            background: linear-gradient(to bottom,
                    rgba(0, 0, 0, 0.2),
                    rgba(0, 0, 0, 0.8));
            color: white;
            opacity: 0.9;
            transition: all 0.4s ease;
        }

        .category-link:hover .overlay-content {
            opacity: 1;
            background: linear-gradient(to bottom,
                    rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.9));
        }

        .card-title {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .card-text {
            font-size: 1.1rem;
            opacity: 0.8;
        }
    </style>
@endsection
