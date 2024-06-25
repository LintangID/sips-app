@extends('layouts.main')

@section('title')
    Buat Laporan Kegiatan
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
                                Laporan Kegiatan
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
            <form action="{{ route('buat-lk') }}" method="post" target="_blank" enctype="multipart/form-data">
                @csrf
                <div class="row gx-4">
                    <div class="col-lg-10">
                        <div class="card mb-4">
                            <div class="card-header">Form Laporan Kegiatan</div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="no_surat" class="col-sm-3 col-form-label">No. Surat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" placeholder="Nomor Surat" required>
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
                                        <input type="text" class="form-control @error('kepsek') is-invalid @enderror" name="kepsek" placeholder="Kepala Sekolah" required>
                                    </div>
                                    @error('kepsek')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="nip_kepsek" class="col-sm-3 col-form-label">NIP Kepala Sekolah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nip_kepsek') is-invalid @enderror" name="nip_kepsek" placeholder="NIP Kepala Sekolah" required>
                                    </div>
                                    @error('nip_kepsek')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3 row">
                                    <label for="tanggal_surat" class="col-sm-3 col-form-label">Tanggal Surat</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control datepicker @error('tanggal_surat') is-invalid @enderror" value="{{ old('tanggal_surat') }}" name="tanggal_surat" required>
                                    </div>
                                    @error('tanggal_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div> --}}
                                {{-- <div class="mb-3 row">
                                    <label for="isi_surat" class="col-sm-3 col-form-label">Isi Surat</label>
                                    <div class="col-sm-9">
                                        <textarea cols="30" rows="10" class="form-control @error('isi_surat') is-invalid @enderror" value="{{ old('isi_surat') }}" name="isi_surat" placeholder="Isi Surat" required ></textarea>
                                    </div>
                                    @error('isi_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div> --}}
                                {{-- <div class="mb-3 row">
                                    <label for="isi_surat" class="col-sm-3 col-form-label">Isi Surat</label>
                                    @error('isi_surat')
                                        <p class="text-danger">
                                            {{ $message; }}
                                        </p>
                                    @enderror
                                    <div class="col-sm-9">
                                        <input id="isi_surat" type="hidden" name="isi_surat"  value="{{ old('isi_surat') }}">
                                        <trix-editor input='isi_surat' ></trix-editor>
                                        </div>
                                    @error('isi_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div> --}}

                                <div class="mb-3 row">
                                    <label for="nama_guru" class="col-sm-3 col-form-label">Nama Guru</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" value="{{ old('nama_guru') }}" name="nama_guru" placeholder="Nama Siswa" required>
                                    </div>
                                    @error('nama_guru')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="nip_guru" class="col-sm-3 col-form-label">NIP Guru</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nip_guru') is-invalid @enderror" value="{{ old('nip_guru') }}" name="nip_guru" placeholder="Kelas" required>
                                    </div>
                                    @error('nip_guru')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="hari" class="col-sm-3 col-form-label">Hari / Tanggal</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('hari') is-invalid @enderror" value="{{ old('hari') }}" name="hari" placeholder="Hari, tanggal" required>
                                    </div>
                                    @error('hari')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('tempat') is-invalid @enderror" value="{{ old('tempat') }}" name="tempat" placeholder="Tempat" required>
                                    </div>
                                    @error('tempat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="kegiatan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('kegiatan') is-invalid @enderror" value="{{ old('kegiatan') }}" name="kegiatan" placeholder="Nama Kegiatan" required>
                                    </div>
                                    @error('kegiatan')
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
