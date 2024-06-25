@extends('layouts.main')

@section('title')
    Buat Surat Keterangan
@endsection

@section('container')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file-text"></i></div>
                                Surat Keterangan
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <button class="btn btn-sm btn-light text-primary" onclick="javascript:window.history.back();">
                                <i class="me-1" data-feather="arrow-left"></i>
                                Kembali Ke Halaman Buat Surat
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-fluid px-4">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('buat-sk') }}" method="post" target="_blank" enctype="multipart/form-data">
                @csrf
                <div class="row gx-4">
                    <div class="col-lg-10">
                        <div class="card mb-4">
                            <div class="card-header">Form Surat Keterangan</div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="no_surat" class="col-sm-3 col-form-label">No. Surat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('no_surat') is-invalid @enderror" value="{{ old('no_surat') }}" name="no_surat" placeholder="Nomor Surat" required>
                                    </div>
                                    @error('no_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="kepsek" class="col-sm-3 col-form-label">Kepala Sekolah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('kepsek') is-invalid @enderror" value="{{ old('kepsek') }}" name="kepsek" placeholder="Kepala Sekolah" required>
                                    </div>
                                    @error('kepsek')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}" name="nip" placeholder="NIP" required>
                                    </div>
                                    @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama_siswa" class="col-sm-3 col-form-label">Nama Siswa</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" value="{{ old('nama_siswa') }}" name="nama_siswa" placeholder="Nama Siswa" required>
                                    </div>
                                    @error('nama_siswa')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" value="{{ old('kelas') }}" name="kelas" placeholder="Kelas" required>
                                    </div>
                                    @error('kelas')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="nis/nisn" class="col-sm-3 col-form-label">NIS / NISN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nis/nisn') is-invalid @enderror" value="{{ old('nis/nisn') }}" name="nis/nisn" placeholder="NIS/NISN" required>
                                    </div>
                                    @error('nis/nisn')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tahun_pelajaran" class="col-sm-3 col-form-label">Tahun Pelajaran</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('tahun_pelajaran') is-invalid @enderror" value="{{ old('tahun_pelajaran') }}" name="tahun_pelajaran" placeholder="Tahun Pelajaran" required>
                                    </div>
                                    @error('tahun_pelajaran')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3 row">
                                    <label for="tahun_kelulusan" class="col-sm-3 col-form-label">Tahun Kelulusan / Tahun Ujian Sekolah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('tahun_kelulusan') is-invalid @enderror" value="{{ old('tahun_kelulusan') }}" name="tahun_kelulusan" placeholder="Tahun Kelulusan / Tahun Ujian Sekolah" required>
                                    </div>
                                    @error('tahun_kelulusan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div> --}}

                                <div class="mb-3 row">
                                    <label for="ttl" class="col-sm-3 col-form-label">Tempat, tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('ttl') is-invalid @enderror" value="{{ old('ttl') }}" name="ttl" placeholder="Tempat, tanggal lahir" required>
                                    </div>
                                    @error('ttl')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" name="alamat" placeholder="Alamat" required>
                                    </div>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="npsn" class="col-sm-3 col-form-label">NPSN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('npsn') is-invalid @enderror" value="{{ old('npsn') }}" name="npsn" placeholder="NPSN" required>
                                    </div>
                                    @error('npsn')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" name="keterangan" placeholder="Keterangan" required>
                                        {{-- <select class="form-select" name="keterangan" value="{{ old('keterangan') }}"  required autofocus >
                                            <option value="lulus" selected>telah lulus</option>
                                            <option value="ujian" >telah mengikuti ujian sekolah</option>
                                        </select> --}}
                                    </div>
                                    @error('keterangan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="keperluan" class="col-sm-3 col-form-label">Keperluan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('keperluan') is-invalid @enderror" value="{{ old('keperluan') }}" name="keperluan" placeholder="Keperluan" required>
                                    </div>
                                    @error('keperluan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="letter_file" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary">Buat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

@push('addon-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endpush

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".selectx").select2({
            theme: "bootstrap-5"
        });
    </script>
    <script>
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });
    </script>
@endpush
