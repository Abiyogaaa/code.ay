@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center min-vh-100 align-items-center">
            <div class="col-md-5">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <!-- Logo or Brand (optional) -->
                        <div class="text-center mb-4">
                            <img src="{{ asset('img/CODE.AY.svg') }}" alt="Logo" class="mb-0" height="120">
                            <h1 class="h3 fw-bold text-secondary">Welcome Back!</h1>
                            <p class="text-muted">Please sign in to your account</p>
                        </div>

                        <!-- Alert Messages -->
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-circle me-2"></i>
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Login Form -->
                        <form action="/login" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label text-secondary fw-semibold small">Email
                                    address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-envelope text-muted"></i>
                                    </span>
                                    <input type="email" name="email"
                                        class="form-control bg-light border-start-0 @error('email') is-invalid @enderror"
                                        id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus
                                        required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label text-secondary fw-semibold small">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-lock text-muted"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control bg-light border-start-0"
                                        id="password" placeholder="Enter your password" required>
                                    <button class="btn btn-light border border-start-0" type="button"
                                        onclick="togglePassword()">
                                        <i class="bi bi-eye text-muted" id="toggleIcon"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mb-4">
                                <button class="btn btn-primary py-3 fw-semibold" type="submit">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>Sign in
                                </button>
                            </div>

                            <p class="text-center text-muted mb-0">
                                Don't have an account?
                                <a href="/register" class="text-decoration-none">Register now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }

        .btn-light:focus {
            box-shadow: none;
        }

        .card {
            border-radius: 10px;
        }

        .input-group-text {
            border-radius: 5px 0 0 5px;
        }

        .form-control {
            border-radius: 0 5px 5px 0;
        }

        .input-group .btn {
            border-radius: 0 5px 5px 0;
        }
    </style>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            }
        }
    </script>
@endsection
