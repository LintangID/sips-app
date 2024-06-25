@extends('layouts.auth')

@section('main')
    <main>
        <div class="container-xl px-4">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <!-- Basic login form-->
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header justify-content-center"><h3 class="fw-light my-4">Login</h3></div>
                        <div class="card-body">
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <!-- Login form-->
                            <form action="/login" method="post">
                                @csrf
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Masukan alamat email" autofocus required/>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Form Group (password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="password">Password</label>
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Masukan password" required/>
                                </div>
                                <!-- Form Group (show password checkbox)-->
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" id="show-password" type="checkbox" />
                                        <label class="form-check-label" for="show-password">Tampilkan password</label>
                                    </div>
                                </div>
                                <!-- Form Group (login box)-->
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="#">

                                    </a>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <a class="small" href="#">

                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small">
                                {{-- <a href="/">
                                    <i class="fas fa-arrow-left"></i> Pergi ke SMA Negeri 3 Boyolali
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('addon-script')
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('show-password');

        showPasswordCheckbox.addEventListener('change', function () {
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
@endpush
