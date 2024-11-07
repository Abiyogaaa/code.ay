@extends('layouts.main')

@section('container')
    <div class="single-post-container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <!-- Post Header -->
                <div class="post-header text-center mb-5">
                    <div class="post-category mb-3">
                        <a href="/blog?category={{ $post->category->slug }}"
                            class="badge bg-dark text-white text-decoration-none px-3 py-2 rounded-pill">
                            {{ $post->category->name }}
                        </a>
                    </div>

                    <h1 class="display-4 fw-bold mb-4">{{ $post->title }}</h1>

                    <div class="post-meta text-muted mb-4">
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($post->author->name) }}"
                                class="rounded-circle" alt="{{ $post->author->name }}" width="40" height="40">
                            <span>By
                                <a href="/blog?author={{ $post->author->username }}"
                                    class="text-decoration-none text-dark fw-bold">
                                    {{ $post->author->name }}
                                </a>
                            </span>
                            <span class="mx-2">•</span>
                            <span>{{ $post->created_at->format('F j, Y') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="post-image mb-5">
                    <div class="featured-image-wrapper rounded-4 shadow-lg overflow-hidden">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid w-100"
                                alt="{{ $post->title }}">
                        @else
                            <img src="{{ asset('img/CODE.AY.svg') }}" class="img-fluid w-100" alt="{{ $post->title }}">
                        @endif
                    </div>
                </div>

                <!-- Post Content -->
                <article class="post-content">
                    <div class="content-wrapper prose">
                        {!! $post->body !!}
                    </div>
                </article>

                <!-- Post Footer -->
                <div class="post-footer mt-5 pt-5 border-top">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="/blog" class="btn btn-outline-dark rounded-pill px-4">
                            <i class="bi bi-arrow-left me-2"></i>Back to Posts
                        </a>

                        <div class="share-buttons">
                            <span class="text-muted me-3">Media Social:</span>
                            <div class="d-inline-flex gap-2">
                                <a href="#" class="btn btn-sm btn-outline-dark rounded-circle">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-dark rounded-circle">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-dark rounded-circle">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .single-post-container {
            max-width: 1140px;
            margin: 0 auto;
        }

        .featured-image-wrapper img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .post-content {
            font-size: 1.125rem;
            line-height: 1.8;
            color: #2c3e50;
        }

        /* Styling for the article content */
        .prose {
            max-width: 65ch;
            margin: 0 auto;
        }

        .prose p {
            margin-bottom: 1.5rem;
        }

        .prose h2 {
            font-size: 1.875rem;
            margin-top: 2.5rem;
            margin-bottom: 1.25rem;
            font-weight: 700;
        }

        .prose h3 {
            font-size: 1.5rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .prose a {
            color: #1a73e8;
            text-decoration: none;
            border-bottom: 2px solid transparent;
            transition: border-color 0.2s ease;
        }

        .prose a:hover {
            border-bottom-color: #1a73e8;
        }

        .prose img {
            border-radius: 0.5rem;
            margin: 2rem 0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .prose blockquote {
            border-left: 4px solid #e2e8f0;
            padding-left: 1rem;
            margin-left: 0;
            font-style: italic;
            color: #4a5568;
        }

        .share-buttons .btn {
            width: 38px;
            height: 38px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .share-buttons .btn:hover {
            background-color: #212529;
            color: white;
            transform: translateY(-2px);
        }
    </style>
@endsection
