<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Utama</div>
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                <div class="nav-link-icon"><i data-feather="home"></i></div>
                Dashboard
            </a>
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <div class="nav-link-icon"><i data-feather="shopping-cart"></i></div>
                My Posts
            </a>
            @can('admin')
                <div class="sidenav-menu-heading">Administrator</div>
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Post Categories
                </a>
            @endcan
            <!-- Sidenav Menu Heading (Core)-->
            {{-- <div class="sidenav-menu-heading">Eksplorasi Kuliner</div>
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseDashboards1" aria-expanded="false" aria-controls="collapseDashboards1">
                <div class="nav-link-icon"><i data-feather="map-pin"></i></div>
                Explorasi Restoran
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDashboards1" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages1">
                    <a class="nav-link" href="dashboard-1.html">
                        Restoran mewah
                        <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                    </a>
                    <a class="nav-link" href="dashboard-2.html">Menu & Harga</a>
                </nav>
            </div>


            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseDashboards2" aria-expanded="false" aria-controls="collapseDashboards2">
                <div class="nav-link-icon"><i data-feather="shopping-cart"></i></div>
                Pesanan Anda
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDashboards2" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages2">
                    <a class="nav-link" href="dashboard-1.html">
                        Keranjang Pemesanan
                        <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                    </a>
                    <a class="nav-link" href="dashboard-2.html">Pesanan Saya</a>
                    <a class="nav-link" href="dashboard-3.html">Promo & Diskon</a>
                </nav>
            </div>

            <div class="sidenav-menu-heading">Pesanan dan Transaksi</div>
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseDashboards3" aria-expanded="false" aria-controls="collapseDashboards3">
                <div class="nav-link-icon"><i data-feather="heart"></i></div>
                Pilihan Khusus
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDashboards3" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages3">
                    <a class="nav-link" href="dashboard-1.html">
                        Restoran Favorit
                        <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                    </a>
                    <a class="nav-link" href="dashboard-2.html">Peta Restoran</a>
                    <a class="nav-link" href="dashboard-2.html">Chef's Special</a>
                </nav>
            </div>

            <div class="sidenav-menu-heading">Ulasan & Dukungan</div>
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseDashboards5" aria-expanded="false" aria-controls="collapseDashboards5">
                <div class="nav-link-icon"><i data-feather="settings"></i></div>
                Pengguna dan Dukungan
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDashboards5" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages5">
                    <a class="nav-link" href="dashboard-1.html">
                        Ulasan & Rating
                        <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                    </a>
                    <a class="nav-link" href="dashboard-1.html">
                        Akun Saya
                        <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                    </a>
                    <a class="nav-link" href="dashboard-2.html">Bantuan & Dukungan</a>
                </nav>
            </div>

            <!-- Sidenav Heading (Custom)-->
            <div class="sidenav-menu-heading">Custom</div>
            <!-- Sidenav Accordion (Pages)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                Pages
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <!-- Nested Sidenav Accordion (Pages -> Authentication)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                        Authentication
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseAuth" data-bs-parent="#accordionSidenavPagesMenu">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                            <!-- Nested Sidenav Accordion (Pages -> Authentication -> Basic)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#pagesCollapseAuthBasic" aria-expanded="false"
                                aria-controls="pagesCollapseAuthBasic">
                                Basic
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuthBasic"
                                data-bs-parent="#accordionSidenavPagesAuth">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="auth-login-basic.html">Login</a>
                                </nav>
                            </div>
                            <!-- Nested Sidenav Accordion (Pages -> Authentication -> Social)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#pagesCollapseAuthSocial" aria-expanded="false"
                                aria-controls="pagesCollapseAuthSocial">
                                Social
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuthSocial"
                                data-bs-parent="#accordionSidenavPagesAuth">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="auth-login-social.html">Login</a>

                                </nav>
                            </div>
                        </nav>
                    </div>
                    <!-- Nested Sidenav Accordion (Pages -> Error)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#pagesCollapseError" aria-expanded="false"
                        aria-controls="pagesCollapseError">
                        Error
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseError" data-bs-parent="#accordionSidenavPagesMenu">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="error-400.html">400 Error</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="pricing.html">Pricing</a>

                </nav>
            </div> --}}
            <!-- Sidenav Accordion (Applications)-->
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content d-flex align-items-center">
            <div class="sidenav-footer-subtitle me-2" style="font-size: 1rem;">Logged in as:</div>
            <!-- Menjadikan nama pengguna sebagai tombol dropdown -->
            <div class="dropdown">
                @php
                    $firstName = explode(' ', auth()->user()->name)[0];
                @endphp

                <button class="btn btn-link dropdown-toggle p-0" type="button" id="profileDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1rem;">
                    {{ $firstName }}
                </button>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown" style="min-width: 200px;">
                    <li><a class="dropdown-item" href="/dashboard/profile">Show Profile</a></li>
                    <li><a class="dropdown-item" href="/profile/change-password">Change Password</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="sidenav-footer-icon ms-3">
                <i class="bi bi-person-circle" style="font-size: 1.25rem;"></i>
            </div>
        </div>
    </div>
</nav>
