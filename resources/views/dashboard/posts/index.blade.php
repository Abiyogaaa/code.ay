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
                            My Posts
                        </h1>
                        <div class="page-header-subtitle">Ini adalah Halaman Post Kamu!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl px-4 mt-n10">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center">
                <a href="/dashboard/posts/create" class="btn btn-primary">
                    <span data-feather="plus"></span>&nbsp Create new post
                </a>



            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 50%;">Title</th>
                                <th>Category</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>
                                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i
                                                data-feather="eye"></i></a>

                                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i
                                                data-feather="edit"></i></a>

                                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Are you sure?')"><span
                                                    data-feather="x-circle"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
