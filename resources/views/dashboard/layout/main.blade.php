<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CODE.AY | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body class="nav-fixed">
    @include('dashboard.layout.header')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('dashboard.layout.sidebar')
        </div>
        <div id="layoutSidenav_content">
            <main>
                <!-- Add this to your layouts/main.blade.php before the main content -->
                @if (!session('no_loading'))
                    <div id="loading-screen" class="loading-overlay">
                        <div class="loading-content">
                            <div class="loading-spinner">
                                <div class="spinner-ring"></div>
                            </div>
                            <div class="loading-text">Loading<span class="dots">...</span></div>
                        </div>
                    </div>
                @endif

                <style>
                    .loading-overlay {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: linear-gradient(45deg, #fbfcfe, #fbfafc);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        z-index: 9999;
                        opacity: 1;
                        transition: opacity 0.5s ease-in-out;
                    }

                    .loading-overlay.hidden {
                        opacity: 0;
                        pointer-events: none;
                    }

                    .loading-content {
                        text-align: center;
                    }

                    .loading-image {
                        margin-bottom: 20px;
                    }

                    .rotating-logo {
                        width: 120px;
                        height: 120px;
                        animation: pulse 2s infinite ease-in-out, rotate 4s infinite linear;
                    }

                    .loading-spinner {
                        margin: 20px auto;
                        position: relative;
                        width: 80px;
                        height: 80px;
                    }

                    .spinner-ring {
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        border: 4px solid transparent;
                        border-top-color: #000000;
                        border-radius: 50%;
                        animation: spin 1s linear infinite;
                    }

                    .spinner-ring::before,
                    .spinner-ring::after {
                        content: '';
                        position: absolute;
                        border: 4px solid transparent;
                        border-radius: 50%;
                    }

                    .spinner-ring::before {
                        top: 5px;
                        left: 5px;
                        right: 5px;
                        bottom: 5px;
                        border-top-color: #130000;
                        animation: spin 2s linear infinite;
                    }

                    .spinner-ring::after {
                        top: 15px;
                        left: 15px;
                        right: 15px;
                        bottom: 15px;
                        border-top-color: #160101;
                        animation: spin 3s linear infinite;
                    }

                    .loading-text {
                        color: rgb(13, 1, 1);
                        font-size: 1.5rem;
                        font-weight: bold;
                        letter-spacing: 2px;
                    }

                    .dots {
                        animation: dots 1.5s infinite;
                    }

                    @keyframes rotate {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    @keyframes pulse {

                        0%,
                        100% {
                            transform: scale(1);
                        }

                        50% {
                            transform: scale(1.1);
                        }
                    }

                    @keyframes spin {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    @keyframes dots {

                        0%,
                        20% {
                            content: '.';
                        }

                        40% {
                            content: '..';
                        }

                        60%,
                        100% {
                            content: '...';
                        }
                    }
                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Show loading screen
                        const loadingScreen = document.getElementById('loading-screen');

                        // Hide loading screen after everything is loaded
                        window.addEventListener('load', function() {
                            setTimeout(function() {
                                loadingScreen.classList.add('hidden');
                            }, 1000); // Delay of 1 second before hiding
                        });
                    });
                </script>


                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


                @if (session()->has('success'))
                    <script>
                        // SweetAlert2 Toast Notification
                        document.addEventListener("DOMContentLoaded", function() {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 6000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener("mouseenter", Swal.stopTimer);
                                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                                }
                            });
                            Toast.fire({
                                icon: "success",
                                title: "{{ session('success') }}" // Menampilkan pesan dari session
                            });
                        });
                    </script>
                @endif

                @yield('container')
            </main>
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables/datatables-simple-demo.js') }}"></script>
</body>

</html>
