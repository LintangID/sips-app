@extends('layouts.main')

@section('title')
    Buat Lembar Disposisi
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
                                Lembar Disposisi
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <button class="btn btn-sm btn-light text-primary" onclick="javascript:window.history.back();">
                                <i class="me-1" data-feather="arrow-left"></i>
                                Kembali Ke Semua Surat
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
            <form action="{{ route('buat-ld') }}" method="post" target="_blank" enctype="multipart/form-data">
                @csrf
                <div class="row gx-4">
                    <div class="col-lg-10">
                        <div class="card mb-4">
                            <div class="card-header">Form Lembar Disposisi</div>
                            <div class="card-body">
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
                                    <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" placeholder="NIP" required>
                                    </div>
                                    @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="no_agenda" class="col-sm-3 col-form-label">No. Agenda</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('no_agenda') is-invalid @enderror" value="{{ old('no_agenda') }}" name="no_agenda" placeholder="Nomor Agenda" autofocus required>
                                    </div>
                                    @error('no_agenda')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
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
                                    <label for="tgl_surat" class="col-sm-3 col-form-label">Tanggal Surat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('tgl_surat') is-invalid @enderror" value="{{ old('tgl_surat') }}" name="tgl_surat" placeholder="Tanggal Surat" required>
                                    </div>
                                    @error('tgl_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tgl_diterima" class="col-sm-3 col-form-label">Tanggal Diterima</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('tgl_diterima') is-invalid @enderror" value="{{ old('tgl_diterima') }}" name="tgl_diterima" placeholder="Nomor diterima" required>
                                    </div>
                                    @error('tgl_diterima')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="asal_surat" class="col-sm-3 col-form-label">Asal</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('asal_surat') is-invalid @enderror" value="{{ old('asal_surat') }}" name="asal_surat" placeholder="Asal Surat" required>
                                    </div>
                                    @error('asal_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="isi_surat" class="col-sm-3 col-form-label">Isi Surat</label>
                                    <div class="col-sm-9">
                                        <textarea cols="30" rows="10" class="form-control @error('isi_surat') is-invalid @enderror" value="{{ old('isi_surat') }}" name="isi_surat" placeholder="Isi Surat" required ></textarea>
                                    </div>
                                    @error('isi_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="golongan" class="col-sm-3 col-form-label">Golongan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('golongan') is-invalid @enderror" value="{{ old('golongan') }}" name="golongan" placeholder="Golongan" required>
                                    </div>
                                    @error('golongan')
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
@endpush
