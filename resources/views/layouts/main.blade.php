<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- bostrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- my style --}}
    <link rel="stylesheet" href="/css/style.css">
    <title>CODE.AY | {{ $title }}</title>
</head>

<body>
    @include('partials.navbar');
    <div class="container mt-2">
        <!-- Add this to your layouts/main.blade.php before the main content -->
        <div id="loading-screen" class="loading-overlay">
            <div class="loading-content">
                {{-- <div class="loading-image">
                <img src="" alt="Loading" class="rotating-logo">
            </div> --}}
                <div class="loading-spinner">
                    <div class="spinner-ring"></div>
                </div>
                <div class="loading-text">Loading<span class="dots">...</span></div>
            </div>
        </div>

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
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
