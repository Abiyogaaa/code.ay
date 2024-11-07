@extends('layouts.main')

@section('container')
    <!-- Hero Section with Parallax -->
    <section class="about-hero-section position-relative overflow-hidden" style="height: 70vh;">
        <div class="parallax-bg position-absolute w-100 h-100"
            style="background: linear-gradient(rgba(33, 37, 41, 0.7), rgba(33, 37, 41, 0.9)), 
                    url('{{ asset('img/WebDevelopment.jpg') }}') no-repeat center center fixed; 
                    background-size: cover;">
        </div>
        <div class="container h-100 d-flex align-items-center">
            <div class="text-light text-center mx-auto" data-aos="fade-up">
                <h1 class="display-3 fw-bold mb-4">Tentang Kami</h1>
                <p class="lead mb-4 px-md-5 text-light-emphasis">Temui tim di balik blog ini dan ketahui bagaimana kami
                    membangun
                    tempat bagi ide dan inspirasi.</p>
                <div class="mt-4">
                    <div class="d-flex justify-content-center gap-4">
                        <div class="text-center">
                            <h3 class="fw-bold mb-0">1000+</h3>
                            <p class="text-light-emphasis">Artikel</p>
                        </div>
                        <div class="text-center">
                            <h3 class="fw-bold mb-0">50K+</h3>
                            <p class="text-light-emphasis">Pembaca</p>
                        </div>
                        <div class="text-center">
                            <h3 class="fw-bold mb-0">100+</h3>
                            <p class="text-light-emphasis">Penulis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section py-6 position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="position-relative">
                        <img src="{{ asset('img/WebDevelopment.jpg') }}" alt="Tim Kami"
                            class="img-fluid rounded-4 shadow-lg">
                        <div
                            class="experience-badge position-absolute top-0 end-0 translate-middle-y bg-primary text-white p-4 rounded-circle">
                            <div class="text-center">
                                <h4 class="fw-bold mb-0">5+</h4>
                                <small>Tahun</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="ps-lg-5">
                        <h6 class="text-primary text-uppercase fw-bold mb-3">Misi Kami</h6>
                        <h2 class="display-5 fw-bold mb-4">Memberikan Inspirasi Melalui Konten Berkualitas</h2>
                        <p class="lead text-muted mb-4">Kami berkomitmen untuk menyediakan konten berkualitas tinggi yang
                            memotivasi, menginspirasi, dan memberikan wawasan kepada pembaca.</p>

                        <div class="features-grid">
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                                <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 mb-3">
                                    <i class="bi bi-pen text-primary fs-4"></i>
                                </div>
                                <h5 class="fw-bold">Kreativitas dalam Setiap Tulisan</h5>
                                <p class="text-muted">Setiap artikel ditulis dengan pendekatan kreatif dan unik</p>
                            </div>
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 mb-3">
                                    <i class="bi bi-people text-primary fs-4"></i>
                                </div>
                                <h5 class="fw-bold">Tim Penulis Berpengalaman</h5>
                                <p class="text-muted">Didukung oleh tim profesional yang ahli di bidangnya</p>
                            </div>
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 mb-3">
                                    <i class="bi bi-graph-up text-primary fs-4"></i>
                                </div>
                                <h5 class="fw-bold">Berbasis Riset dan Data</h5>
                                <p class="text-muted">Artikel kami didukung oleh penelitian dan data terkini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-6 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary text-uppercase fw-bold mb-3">Tim Kami</h6>
                <h2 class="display-5 fw-bold">Bertemu dengan Para Penulis</h2>
                <p class="lead text-muted">Kenali lebih dekat tim yang membuat konten inspiratif untuk Anda</p>
            </div>

            <div class="row g-4">
                <!-- Team Member Card -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card text-center">
                        <div class="team-image position-relative mb-4">
                            <img src="{{ asset('img/abiyoga.jpg') }}" alt="Team Member"
                                class="img-fluid rounded-4 shadow-sm">
                            <div class="team-social">
                                <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-1">Abiyoga W.P.</h5>
                        <p class="text-muted">Web Developer</p>
                    </div>
                </div>
                <!-- Add more team members as needed -->
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section py-6 bg-gradient position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(45deg, #2937f0, #9f1ae2);">
        </div>
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white" data-aos="zoom-in">
                    <h2 class="display-4 fw-bold mb-4">Bergabunglah Bersama Kami!</h2>
                    <p class="lead mb-5">Ingin menjadi bagian dari perjalanan kami? Mari berkolaborasi dan ciptakan
                        konten yang menginspirasi bersama-sama.</p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="/contact" class="btn btn-light btn-lg px-4">Hubungi Kami</a>
                        <a href="/blog" class="btn btn-outline-light btn-lg px-4">Baca Blog</a>
                    </div>
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

        .parallax-bg {
            transform: translateZ(0);
            will-change: transform;
        }

        .experience-badge {
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .features-grid {
            display: grid;
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-item {
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
        }

        .team-card {
            background: white;
            padding: 1.5rem;
            border-radius: 1rem;
            transition: transform 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
        }

        .team-image {
            overflow: hidden;
            border-radius: 1rem;
        }

        .team-social {
            position: absolute;
            bottom: 1rem;
            left: 0;
            right: 0;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .team-card:hover .team-social {
            opacity: 1;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background: white;
            border-radius: 50%;
            color: #2937f0;
            margin: 0 0.25rem;
            transition: transform 0.3s ease;
        }

        .social-link:hover {
            transform: scale(1.1);
            color: #9f1ae2;
        }

        @media (max-width: 768px) {
            .features-grid {
                gap: 1.5rem;
            }
        }
    </style>
@endsection
