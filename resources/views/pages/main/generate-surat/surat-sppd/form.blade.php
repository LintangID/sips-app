@extends('layouts.main')

@section('title')
    Buat Surat SPPD
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
                                Surat SPPD
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
            <form action="{{ route('buat-sppd') }}" method="post" target="_blank" enctype="multipart/form-data">
                @csrf
                <div class="row gx-4">
                    <div class="col-lg-10">
                        <div class="card mb-4">
                            <div class="card-header">Form Surat Perintah Perjalanan Dinas</div>
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
                                    <label for="nip_kepsek" class="col-sm-3 col-form-label">NIP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nip_kepsek') is-invalid @enderror" name="nip_kepsek" placeholder="NIP Kepsek" required>
                                    </div>
                                    @error('nip_kepsek')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama_pegawai" class="col-sm-3 col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nama_pegawai') is-invalid @enderror" value="{{ old('nama_pegawai') }}" name="nama_pegawai" placeholder="Nama Pegawai" required>
                                    </div>
                                    @error('nama_pegawai')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="pangkat" class="col-sm-3 col-form-label">Pangkat dan golongan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('pangkat') is-invalid @enderror" value="{{ old('pangkat') }}" name="pangkat" placeholder="Pangkat dan golongan" required>
                                    </div>
                                    @error('pangkat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}" name="jabatan" placeholder="Jabatan" required>
                                    </div>
                                    @error('jabatan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tingkat" class="col-sm-3 col-form-label">Tingkat menurut perjalanan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('tingkat') is-invalid @enderror" value="{{ old('tingkat') }}" name="tingkat" placeholder="Tingkat Menurut Perjalanan" required>
                                    </div>
                                    @error('tingkat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="maksud" class="col-sm-3 col-form-label">Maksud Perjalanan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('maksud') is-invalid @enderror" value="{{ old('maksud') }}" name="maksud" placeholder="Maksud Perjalanan" required>
                                    </div>
                                    @error('maksud')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="angkutan" class="col-sm-3 col-form-label">Alat angkut</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('angkutan') is-invalid @enderror" value="{{ old('angkutan') }}" name="angkutan" placeholder="Alat angkut yang digunakan" required>
                                    </div>
                                    @error('angkutan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="keberangkatan" class="col-sm-3 col-form-label">Tempat Berangkat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('keberangkatan') is-invalid @enderror" value="{{ old('keberangkatan') }}" name="keberangkatan" placeholder="Tempat berangkat" required>
                                    </div>
                                    @error('keberangkatan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tujuan" class="col-sm-3 col-form-label">Tempat Tujuan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('tujuan') is-invalid @enderror" value="{{ old('tujuan') }}" name="tujuan" placeholder="Tujuan" required>
                                    </div>
                                    @error('tujuan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="lama_perjalanan" class="col-sm-3 col-form-label">Lama Perjalanan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('lama_perjalanan') is-invalid @enderror" value="{{ old('lama_perjalanan') }}" name="lama_perjalanan" placeholder="Lama Perjalanan" required>
                                    </div>
                                    @error('lama_perjalanan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tgl_berangkat" class="col-sm-3 col-form-label">Tanggal Berangkat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('tgl_berangkat') is-invalid @enderror" value="{{ old('tgl_berangkat') }}" name="tgl_berangkat" placeholder="Tanggal Berangkat" required>
                                    </div>
                                    @error('tgl_berangkat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tgl_kembali" class="col-sm-3 col-form-label">Tanggal Kembali</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('tgl_kembali') is-invalid @enderror" value="{{ old('tgl_kembali') }}" name="tgl_kembali" placeholder="Tanggal Kembali" required>
                                    </div>
                                    @error('tgl_kembali')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="pengikut" class="col-sm-3 col-form-label">Pengikut</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('pengikut') is-invalid @enderror" value="{{ old('pengikut') }}" name="pengikut[]" placeholder="Pengikut 1">
                                    </div>
                                    @error('pengikut')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div id="additional-input">
                                </div>
                                <div class="mb-3 row">
                                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" name="keterangan" placeholder="Keterangan" required>
                                    </div>
                                    @error('keterangan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="letter_file" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary btn-md">Buat</button>
                                        <button type="button" onclick="tambahPengikut()" class="btn btn-success btn-md">Tambah Pengikut</button>
                                        <button type="button" onclick="hapusPengikut()" class="btn btn-danger btn-md">Hapus Pengikut</button>
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
        <script>
            var inputCounter = 1;
            function tambahPengikut() {
            inputCounter++;

            var inputDiv = document.createElement('div');
            inputDiv.className = 'mb-3 row';
            inputDiv.id = 'divInput'+inputCounter;

            var label = document.createElement('label');
            label.for ='pengikut';
            label.className = 'col-sm-3 col-form-label'

            var divPengikut = document.createElement('div');
            divPengikut.className = 'col-sm-9'

            var inputPengikut = document.createElement('input')
            inputPengikut.type = 'text';
            inputPengikut.name = 'pengikut[]';
            inputPengikut.className = 'form-control';
            inputPengikut.placeholder = 'Pengikut '+inputCounter;

            divPengikut.appendChild(inputPengikut);

            inputDiv.appendChild(label);
            inputDiv.appendChild(divPengikut);

            document.getElementById('additional-input').appendChild(inputDiv);
        }

        function hapusPengikut(){
                var inputDiv = document.getElementById('divInput'+inputCounter);
                inputDiv.remove();
                inputCounter--;
        }
        </script>
@endpush
