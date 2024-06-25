@extends('layouts.main')

@section('title')
   Ubah Surat
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
                                Ubah Surat
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
            <form action="{{ route('surat-keluar.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row gx-4">
                    <div class="col-lg-9">
                        <div class="card mb-4">
                            <div class="card-header">Form Surat</div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="no_agenda" class="col-sm-3 col-form-label">No. Agenda</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('no_agenda') is-invalid @enderror" value="{{ $item->no_agenda }}" name="no_agenda" required>
                                    </div>
                                    @error('no_agenda')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanggal_agenda" class="col-sm-3 col-form-label">Tanggal Agenda</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control @error('tanggal_agenda') is-invalid @enderror" value="{{ old('tanggal_agenda',$item->tanggal_agenda) }}" name="tanggal_agenda" required>
                                    </div>
                                    @error('tanggal_agenda')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanggal_surat" class="col-sm-3 col-form-label">Tanggal Surat</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control @error('tanggal_surat') is-invalid @enderror" value="{{ old('tanggal_surat',$item->tanggal_surat) }}" name="tanggal_surat" required>
                                    </div>
                                    @error('tanggal_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="no_surat" class="col-sm-3 col-form-label">No. Surat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('no_surat') is-invalid @enderror" value="{{ old('no_surat',$item->no_surat) }}" name="no_surat" placeholder="Nomor Surat" required>
                                    </div>
                                    @error('no_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="isi_surat" class="col-sm-3 col-form-label">Isi Surat</label>
                                    <div class="col-sm-9">
                                        <textarea cols="30" rows="10" class="form-control @error('isi_surat') is-invalid @enderror"  name="isi_surat" placeholder="Isi Surat" required > {{  old('isi_surat',$item->isi_surat) }}</textarea>
                                    </div>
                                    @error('isi_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3 row">
                                    <label for="isi_surat" class="col-sm-3 col-form-label">Isi Surat</label>
                                    @error('isi_surat')
                                        <p class="text-danger">
                                            {{ $message; }}
                                        </p>
                                    @enderror
                                    <div class="col-sm-9">
                                        <input id="isi_surat" type="hidden" name="isi_surat" value="{{ old('isi_surat', $item->isi_surat) }}">
                                        <trix-editor input='isi_surat' ></trix-editor>
                                    </div>
                                </div> --}}
                                <div class="mb-3 row">
                                    <label for="golongan" class="col-sm-3 col-form-label">Golongan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('golongan') is-invalid @enderror" value="{{ old('golongan', $item->golongan) }}" name="golongan" placeholder="Golongan" required>
                                    </div>
                                    @error('golongan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan', $item->keterangan) }}" name="keterangan" placeholder="Keterangan" required>
                                    </div>
                                    @error('keterangan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="file_surat" class="col-sm-3 col-form-label">File</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control @error('file_surat') is-invalid @enderror" value="{{ old('file_surat', $item->file_surat) }}" name="file_surat" >
                                        <div id="file_surat" class="form-text">Ekstensi .pdf</div>
                                    </div>
                                    @error('file_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="letter_file" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
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

