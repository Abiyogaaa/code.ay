@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center min-vh-100 align-items-center">
            <div class="col-md-5">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <!-- Header -->
                        <div class="text-center mb-4">
                            <img src="{{ asset('img/CODE.AY.svg') }}" alt="Logo" class="mb-0" height="120">
                            <h1 class="h3 fw-bold text-secondary mt-0">Create Account</h1>
                            <p class="text-muted">Get started with your free account</p>
                        </div>

                        <!-- Register Form -->
                        <form action="/register" method="post">
                            @csrf
                            <!-- Name Input -->
                            <div class="mb-3">
                                <label for="name" class="form-label text-secondary fw-semibold small">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-person text-muted"></i>
                                    </span>
                                    <input type="text"
                                        class="form-control bg-light border-start-0 @error('name') is-invalid @enderror"
                                        name="name" id="name" placeholder="Enter your name"
                                        value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Username Input -->
                            <div class="mb-3">
                                <label for="username" class="form-label text-secondary fw-semibold small">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-at text-muted"></i>
                                    </span>
                                    <input type="text"
                                        class="form-control bg-light border-start-0 @error('username') is-invalid @enderror"
                                        id="username" name="username" placeholder="Choose a username"
                                        value="{{ old('username') }}" required>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="email" class="form-label text-secondary fw-semibold small">Email
                                    Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-envelope text-muted"></i>
                                    </span>
                                    <input type="email"
                                        class="form-control bg-light border-start-0 @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="name@example.com"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="mb-4">
                                <label for="password" class="form-label text-secondary fw-semibold small">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-lock text-muted"></i>
                                    </span>
                                    <input type="password"
                                        class="form-control bg-light border-start-0 @error('password') is-invalid @enderror"
                                        name="password" id="password" placeholder="Create a password" required>
                                    <button class="btn btn-light border border-start-0" type="button"
                                        onclick="togglePassword()">
                                        <i class="bi bi-eye text-muted" id="toggleIcon"></i>
                                    </button>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-text small text-muted mt-2">
                                    Password must be at least 8 characters long
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2 mb-4">
                                <button class="btn btn-primary py-3 fw-semibold" type="submit">
                                    <i class="bi bi-person-plus me-2"></i>Create Account
                                </button>
                            </div>

                            <!-- Login Link -->
                            <p class="text-center text-muted mb-0">
                                Already have an account?
                                <a href="/login" class="text-decoration-none">Sign in</a>
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
