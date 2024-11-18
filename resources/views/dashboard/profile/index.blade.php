@extends('dashboard.layout.main')

@section('container')
    <header class="page-header page-header-dark pb-10"
        style="background-image: url('{{ asset('img/header.png') }}'); background-size: cover; background-position: center;">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title text-white">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            My Profile
                        </h1>
                        <div class="page-header-subtitle text-white">Ini adalah halaman profil Anda!</div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="d-flex justify-content-start justify-content-sm-center flex-wrap gap-2">
                            <!-- Tombol Lengkapi Data -->
                            <button class="btn btn-info mb-2" data-bs-toggle="modal" data-bs-target="#completeDataModal">
                                <i data-feather="file-plus"></i> &nbsp;Lengkapi Data
                            </button>

                            <!-- Tombol Edit Profile -->
                            <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                <i data-feather="edit"></i> &nbsp;Edit Profile
                            </button>


                            <!-- Tombol Change Password -->
                            <a class="btn btn-secondary mb-2" onclick="toggleChangePassword()">
                                <i data-feather="lock"></i> &nbsp;Change Password
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>


    <div class="container-xl px-4 mt-n10">
        <div class="card shadow-lg border-0 rounded-lg mb-4">
            <div class="card-header bg-gradient-secondary-to-secondary text-secondary">
                <h4 class="mb-0 fw-bold">Profile Information</h4>
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <!-- Profile Image Section -->
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <div class="position-relative d-inline-block">
                            @if (auth()->user()->image)
                                <img src="{{ Storage::url(auth()->user()->image) }}" alt="Profile Picture"
                                    class="img-thumbnail rounded-circle shadow-sm border-3"
                                    style="width: 180px; height: 180px; object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}"
                                    alt="Default Profile Picture" class="img-thumbnail rounded-circle shadow-sm border-3"
                                    style="width: 180px; height: 180px; object-fit: cover;">
                            @endif
                            <div class="position-absolute bottom-0 end-0 bg-success rounded-circle p-1">
                                <div class="bg-white rounded-circle p-1">
                                    <i class="fas fa-check text-success"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="mt-3 mb-1">{{ $user->name }}</h4>
                        <p class="text-muted mb-3">{{ $user->username }}</p>
                    </div>

                    <div class="col-md-8">
                        <div id="profileSection" class="bg-light rounded-3 p-4">
                            <!-- Konten Informasi Dasar -->
                            <div class="mb-4">
                                <h5 class="text-secondary mb-3">Basic Information</h5>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <p class="mb-2">
                                            <i class="fas fa-envelope text-secondary me-2"></i>
                                            <strong>Email:</strong> {{ $user->email }}
                                        </p>
                                        <p class="mb-2">
                                            <i class="fas fa-phone text-secondary me-2"></i>
                                            <strong>Phone:</strong> {{ $user->phone ?? 'No phone available' }}
                                        </p>
                                        <p class="mb-2">
                                            <i class="fas fa-map-marker-alt text-secondary me-2"></i>
                                            <strong>Address:</strong> {{ $user->address ?? 'No address available' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Konten Bio -->
                            <div class="mb-4">
                                <h5 class="text-secondary mb-3">About Me</h5>
                                <p class="text-muted">{{ $user->bio ?? 'No bio available' }}</p>
                            </div>

                            <!-- Tautan Sosial Media -->
                            <div>
                                <h5 class="text-secondary mb-3">Social Media</h5>
                                <div class="d-flex flex-wrap gap-3">
                                    @if ($user->facebook)
                                        <a href="{{ $user->facebook }}" class="btn btn-outline-primary btn-sm"
                                            target="_blank">
                                            <i class="fab fa-facebook me-2"></i>Facebook
                                        </a>
                                    @endif
                                    @if ($user->twitter)
                                        <a href="{{ $user->twitter }}" class="btn btn-outline-info btn-sm" target="_blank">
                                            <i class="fab fa-twitter me-2"></i>Twitter
                                        </a>
                                    @endif
                                    @if ($user->instagram)
                                        <a href="{{ $user->instagram }}" class="btn btn-outline-danger btn-sm"
                                            target="_blank">
                                            <i class="fab fa-instagram me-2"></i>Instagram
                                        </a>
                                    @endif
                                    @if ($user->linkedin)
                                        <a href="{{ $user->linkedin }}" class="btn btn-outline-primary btn-sm"
                                            target="_blank">
                                            <i class="fab fa-linkedin me-2"></i>LinkedIn
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Form Ubah Password (Tersembunyi) -->
                        <div id="changePasswordSection" class="bg-light rounded-3 p-4" style="display: none;">
                            <h5 class="text-dark mb-3 text-center">Change Password</h5>
                            <form action="{{ route('profile.updatePassword') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="currentPassword" class="form-label">Current Password</label>
                                    <input type="password"
                                        class="form-control @error('currentPassword') is-invalid @enderror"
                                        id="currentPassword" name="currentPassword" required>
                                    @error('currentPassword')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="newPassword" class="form-label">New Password</label>
                                    <input type="password" class="form-control @error('newPassword') is-invalid @enderror"
                                        id="newPassword" name="newPassword" required>
                                    @error('newPassword')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                    <input type="password"
                                        class="form-control @error('confirmPassword') is-invalid @enderror"
                                        id="confirmPassword" name="newPassword_confirmation" required>
                                    @error('confirmPassword')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-info">Save Changes</button>
                                <button type="button" class="btn btn-secondary"
                                    onclick="toggleChangePassword()">Cancel</button>
                            </form>
                        </div>
                    </div>

                    <script>
                        function toggleChangePassword() {
                            const profileSection = document.getElementById('profileSection');
                            const changePasswordSection = document.getElementById('changePasswordSection');

                            if (profileSection.style.display === 'none') {
                                profileSection.style.display = 'block';
                                changePasswordSection.style.display = 'none';
                            } else {
                                profileSection.style.display = 'none';
                                changePasswordSection.style.display = 'block';
                                document.getElementById('currentPassword').focus();
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Background gradient for primary section */
        .bg-gradient-primary-to-secondary {
            background: linear-gradient(45deg, #4e73df 0%, #224abe 100%);
        }

        /* Hover effect for cards */
        .card {
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Hover effect for buttons */
        .btn-outline-primary:hover,
        .btn-outline-info:hover,
        .btn-outline-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Hover effect for buttons with gradient */
        .btn-info,
        .btn-primary,
        .btn-secondary {
            transition: all 0.3s ease;
            background-image: linear-gradient(45deg, #4e73df, #224abe);
            color: #fff;
            border: none;
        }

        .btn-info:hover {
            background-image: linear-gradient(45deg, #36b9cc, #1c9ab5);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            background-image: linear-gradient(45deg, #224abe, #4e73df);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary:hover {
            background-image: linear-gradient(45deg, #858796, #6c757d);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Hover effect for social links */
        .social-links a {
            transition: all 0.3s ease;
        }

        /* Hover effect for image thumbnails */
        .img-thumbnail {
            transition: all 0.3s ease;
        }

        .img-thumbnail:hover {
            transform: scale(1.05);
        }
    </style>


    <!-- Modal Edit Profile -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/dashboard/profile/{{ $user->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $user->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ $user->username }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Lengkapi Data -->
    <div class="modal fade" id="completeDataModal" tabindex="-1" aria-labelledby="completeDataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="completeDataModalLabel">Lengkapi Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/dashboard/profile" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body mb-0">
                        <label for="image" class="form-label">Image Profile</label>
                        @if ($user->image)
                            <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Picture"
                                class="img-preview img-fluid mb-3 col-sm-5">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                            id="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="modal-body pt-0">
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio Singkat</label>
                            <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="3"
                                placeholder="Ceritakan sedikit tentang diri Anda">{{ old('bio', $user->bio) }}</textarea>
                            @error('bio')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                id="address" name="address" value="{{ old('address', $user->address) }}"
                                placeholder="Masukkan alamat" required>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                id="phone" name="phone" value="{{ old('phone', $user->phone) }}"
                                placeholder="Masukkan nomor telepon" required>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="url" class="form-control @error('facebook') is-invalid @enderror"
                                id="facebook" name="facebook" value="{{ old('facebook', $user->facebook) }}"
                                placeholder="Tautan profil Facebook">
                            @error('facebook')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="url" class="form-control @error('twitter') is-invalid @enderror"
                                id="twitter" name="twitter" value="{{ old('twitter', $user->twitter) }}"
                                placeholder="Tautan profil Twitter">
                            @error('twitter')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="url" class="form-control @error('instagram') is-invalid @enderror"
                                id="instagram" name="instagram" value="{{ old('instagram', $user->instagram) }}"
                                placeholder="Tautan profil Instagram">
                            @error('instagram')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="linkedin" class="form-label">LinkedIn</label>
                            <input type="url" class="form-control @error('linkedin') is-invalid @enderror"
                                id="linkedin" name="linkedin" value="{{ old('linkedin', $user->linkedin) }}"
                                placeholder="Tautan profil LinkedIn">
                            @error('linkedin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="changepwModal" tabindex="-1" role="dialog" aria-labelledby="changepwModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <!-- Menambahkan modal-dialog-centered untuk menempatkan modal di tengah -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changepwModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/dashboard/change-password/{{ $user->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="pwlama" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="pwlama" name="pwlama" required>
                        </div>
                        <div class="mb-3">
                            <label for="pwbaru" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="pwbaru" name="pwbaru" required>
                        </div>
                        <div class="mb-3">
                            <label for="pwbaru2" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="pwbaru2" name="pwbaru2" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 --}}

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
