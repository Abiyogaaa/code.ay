<!-- Elegant Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm" style="backdrop-filter: blur(10px);">
    <div class="container">
        <!-- Brand Logo -->

        <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="/dashboard">
            <div class="modern-logo">
                <div class="logo-square">
                    <span class="code">C</span>
                </div>
                <span class="brand-name">CODE<span class="highlight">.</span>AY</span>
            </div>
        </a>


        <style>
            .navbar-brand {
                font-weight: bold;
            }

            .modern-logo {
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .logo-square {
                width: 32px;
                height: 32px;
                background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 6px rgba(78, 115, 223, 0.1);
            }

            .logo-square .code {
                color: white;
                font-weight: 900;
                font-size: 18px;
            }

            .brand-name {
                font-size: 20px;
                font-weight: 800;
                letter-spacing: 1px;
                color: #2c3e50;
            }

            .highlight {
                color: #4e73df;
                margin: 0 2px;
            }

            .modern-logo:hover .logo-square {
                transform: rotate(5deg);
                transition: transform 0.3s ease;
            }
        </style>


        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link px-3 {{ $active === 'home' ? 'active' : '' }}" href="/">
                        <span class="nav-indicator"></span>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ $active === 'about' ? 'active' : '' }}" href="/about">
                        <span class="nav-indicator"></span>
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ $active === 'blog' ? 'active' : '' }}" href="/blog">
                        <span class="nav-indicator"></span>
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ $active === 'categories' ? 'active' : '' }}" href="/categories">
                        <span class="nav-indicator"></span>
                        Categories
                    </a>
                </li>
            </ul>

            <!-- Auth Navigation -->
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle user-dropdown d-flex align-items-center gap-2" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-avatar">
                                @if (auth()->user()->image)
                                    <!-- Tampilkan gambar profil jika ada -->
                                    <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile Image"
                                        class="img-fluid rounded-circle" />
                                @else
                                    <!-- Tampilkan inisial nama jika tidak ada gambar -->
                                    {{ substr(auth()->user()->name, 0, 1) }}
                                @endif
                            </div>

                            <span>{{ strtok(auth()->user()->name, ' ') }}</span>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item py-2 px-4" href="\dashboard">
                                    <i class="bi bi-layout-text-sidebar-reverse me-2"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider mx-2">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item py-2 px-4 text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link login-btn {{ $active === 'login' ? 'active' : '' }}">
                            <i class="bi bi-box-arrow-in-right me-1"></i>
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Custom CSS -->
<style>
    /* Navbar Styles */
    .navbar {
        transition: all 0.3s ease;
        background-color: rgba(255, 255, 255, 0.95) !important;
    }

    .navbar.scrolled {
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    /* Brand Logo */
    .text-gradient {
        background: linear-gradient(45deg, #FF416C, #FF4B2B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 1.5rem;
    }

    /* Navigation Links */
    .nav-link {
        position: relative;
        font-weight: 500;
        color: #333 !important;
        transition: all 0.3s ease;
        padding: 0.5rem 1rem !important;
    }

    .nav-link:hover {
        color: #FF416C !important;
    }

    .nav-link.active {
        color: #FF416C !important;
    }

    /* Navigation Indicator */
    .nav-indicator {
        position: absolute;
        left: 1rem;
        right: 1rem;
        bottom: 0;
        height: 2px;
        background-color: #FF416C;
        opacity: 0;
        transform: scaleX(0);
        transition: all 0.3s ease;
    }

    .nav-link:hover .nav-indicator,
    .nav-link.active .nav-indicator {
        opacity: 1;
        transform: scaleX(1);
    }

    /* User Avatar */
    .user-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: linear-gradient(45deg, #FF416C, #FF4B2B);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
    }

    /* Dropdown Styles */
    .dropdown-menu {
        border-radius: 0.5rem;
        margin-top: 1rem;
        min-width: 200px;
    }

    .dropdown-item {
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        padding-left: 1.75rem;
    }

    /* Login Button */
    .login-btn {
        background: linear-gradient(45deg, #FF416C, #FF4B2B);
        color: white !important;
        border-radius: 50px;
        padding: 0.5rem 1.5rem !important;
        transition: all 0.3s ease;
    }

    .login-btn.active {
        background: linear-gradient(45deg, #FF4B2B, #FF416C);
        /* Warna latar saat active */
        color: white !important;
        /* Warna teks saat active */
    }

    .login-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(255, 65, 108, 0.3);
        color: white !important;
    }

    /* Mobile Responsive */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: white;
            padding: 1rem;
            border-radius: 1rem;
            margin-top: 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            padding: 0.75rem 1rem !important;
        }

        .login-btn {
            width: 100%;
            text-align: center;
            margin-top: 0.5rem;

        }
    }
</style>

<!-- JavaScript for Navbar Scroll Effect -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    });
</script>
