@extends('dashboard.layout.main')
@section('container')
    <header class="page-header page-header-dark pb-10"
        style="background-image: url('{{ asset('img/header.png') }}'); background-size: cover; background-position: center;">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            Create Data My Posts
                        </h1>
                        <div class="page-header-subtitle">Ini adalah Halaman Post Kamu!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Solid Form Controls-->
    <div class="container-xl px-4 mt-n10">
        <div class="card mb-4">
            <div id="solid">
                <div class="card mb-4">
                    <div class="card-header">
                        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>
                    </div>
                    <div class="card-body">
                        <!-- Component Preview-->
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <input
                                            class="form-control form-control-solid @error('title')
                                            is-invalid
                                        @enderror"
                                            id="title" type="text" placeholder="Title" name="title" required
                                            autofocus value="{{ old('title') }}" />
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="slug">Slug</label>
                                        <input
                                            class="form-control form-control-solid @error('slug')
                                            is-invalid
                                        @enderror"
                                            id="slug" type="text" name="slug"readonly required
                                            value="{{ old('slug') }}" />
                                        @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category">Category</label><select class="form-control" id="category"
                                            name="category_id">
                                            @foreach ($categories as $category)
                                                @if (old('category_id') == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Post Image</label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        <input
                                            class="form-control @error('image')
                                            is-invalid
                                        @enderror"
                                            type="file" name="image" id="image" onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="body">Body</label>
                                        @error('body')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                        <trix-editor input="body"></trix-editor>
                                    </div>
                                    {{-- <div class="mb-0">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control form-control-solid" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div> --}}

                                    <button type="submit" class="btn btn-primary mt-3">Create Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
