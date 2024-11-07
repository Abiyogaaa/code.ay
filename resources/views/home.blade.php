@extends('layouts.main')
@section('container')
    <!-- Hero Section with Parallax Effect -->
    <section class="hero-section position-relative overflow-hidden" style="height: 100vh;">
        <div class="parallax-bg position-absolute w-100 h-100"
            style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('img/WebDevelopment.jpg') }}') no-repeat center center; background-size: cover;">
        </div>
        <div class="container h-100 d-flex align-items-center">
            <div class="text-light text-center mx-auto" data-aos="fade-up">
                <h1 class="display-3 fw-bold mb-4">Selamat Datang di Blog Inspiratif Kami</h1>
                <p class="lead mb-5 px-md-5">Tempat di mana ide, cerita, dan informasi berkumpul untuk menginspirasi dan
                    memperluas wawasan Anda.</p>
                <a href="/blog" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill hover-scale">Jelajahi Blog</a>
            </div>
        </div>
    </section>

    <!-- About Section with Modern Design -->
    <section class="about-section py-6">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="display-4 fw-bold mb-4">Tentang Blog Kami</h2>
                    <p class="lead text-muted">Kami berkomitmen untuk menghadirkan artikel berkualitas tinggi yang
                        bermanfaat bagi pembaca.</p>
                    <div class="mt-4 d-flex gap-3">
                        <div class="stat-box bg-light p-4 rounded-3 text-center">
                            <h3 class="fw-bold text-primary mb-0">1000+</h3>
                            <p class="small text-muted mb-0">Artikel</p>
                        </div>
                        <div class="stat-box bg-light p-4 rounded-3 text-center">
                            <h3 class="fw-bold text-primary mb-0">50K+</h3>
                            <p class="small text-muted mb-0">Pembaca</p>
                        </div>
                    </div>
                    <a href="/about" class="btn btn-primary btn-lg mt-4 rounded-pill">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative">
                        <img src="{{ asset('img/CODE.AY.svg') }}" alt="Tentang Kami" class="img-fluid rounded-4 shadow-lg">
                        <div class="position-absolute top-0 start-0 translate-middle bg-primary p-4 rounded-circle">
                            <i class="bi bi-award-fill text-light fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section with Hover Effects -->
    <section class="features-section py-6 bg-light">
        <div class="container">
            <h2 class="display-4 text-center fw-bold mb-5" data-aos="fade-up">Fitur Unggulan</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg h-100 hover-translate">
                        <div class="card-body p-5 text-center">
                            <div class="feature-icon bg-primary bg-gradient p-3 rounded-circle mb-4 mx-auto"
                                style="width: 80px; height: 80px;">
                                <i class="bi bi-pencil-square text-light fs-1"></i>
                            </div>
                            <h4 class="card-title mb-3">Artikel Berkualitas</h4>
                            <p class="card-text text-muted">Artikel kami ditulis dengan cermat dan penuh riset untuk
                                memastikan pembaca mendapatkan informasi yang akurat dan bermanfaat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-lg h-100 hover-translate">
                        <div class="card-body p-5 text-center">
                            <div class="feature-icon bg-success bg-gradient p-3 rounded-circle mb-4 mx-auto"
                                style="width: 80px; height: 80px;">
                                <i class="bi bi-tags text-light fs-1"></i>
                            </div>
                            <h4 class="card-title mb-3">Kategori Beragam</h4>
                            <p class="card-text text-muted">Dari teknologi hingga gaya hidup, temukan berbagai topik yang
                                menarik sesuai dengan minat Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-lg h-100 hover-translate">
                        <div class="card-body p-5 text-center">
                            <div class="feature-icon bg-danger bg-gradient p-3 rounded-circle mb-4 mx-auto"
                                style="width: 80px; height: 80px;">
                                <i class="bi bi-calendar3 text-light fs-1"></i>
                            </div>
                            <h4 class="card-title mb-3">Update Teratur</h4>
                            <p class="card-text text-muted">Kami mengunggah konten baru secara rutin, memastikan Anda selalu
                                memiliki bacaan baru setiap kali berkunjung.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section with Modern Design -->
    <section class="newsletter-section py-6 bg-gradient position-relative overflow-hidden"
        style="background: linear-gradient(45deg, #2937f0, #9f1ae2);">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background-image: url('{{ asset('img/CODE.AY.svg') }}'); background-size: cover;">
        </div>
        <div class="container position-relative" data-aos="zoom-in">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-dark">
                    <h2 class="display-4 fw-bold mb-4">Bergabunglah dengan Komunitas Kami</h2>
                    <p class="lead mb-5">Dapatkan konten eksklusif dan tetap terupdate dengan artikel terbaru kami.</p>
                    <form class="newsletter-form d-flex gap-2 justify-content-center">
                        <input type="email" class="form-control form-control-lg w-auto" placeholder="Masukkan email Anda">
                        <button type="submit" class="btn btn-light btn-lg px-4">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS -->
    <style>
        .py-6 {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .hover-translate {
            transition: transform 0.3s ease;
        }

        .hover-translate:hover {
            transform: translateY(-10px);
        }

        .parallax-bg {
            transform: translateZ(0);
            will-change: transform;
        }

        .feature-icon i {
            line-height: 54px;
        }

        .newsletter-form .form-control {
            border: none;
            padding: 1rem 1.5rem;
            border-radius: 50px;
        }

        .newsletter-form .btn {
            border-radius: 50px;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        @media (max-width: 768px) {
            .display-3 {
                font-size: 2.5rem;
            }

            .display-4 {
                font-size: 2rem;
            }
        }
    </style>

    <!-- Add AOS Animation Library in your layout file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true
            });
        });
    </script>
@endsection
