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
                            Posts Categories
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
                <a href="/dashboard/categories/create" class="btn btn-primary">
                    <span data-feather="plus"></span> &nbsp Create new category
                </a>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show ms-3 flex-grow-1 mb-0" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 30% ">Category Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i
                                                data-feather="eye"></i></a>

                                        <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                            class="badge bg-warning"><i data-feather="edit"></i></a>

                                        <form action="/dashboard/categories/{{ $category->slug }}" method="post"
                                            class="d-inline">
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
