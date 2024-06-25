@extends('layouts.main')

@section('title')
    Buat Surat Rekomendasi
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
                                Surat Rekomendasi
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
            <form action="{{ route('buat-sr') }}" method="post" target="_blank" enctype="multipart/form-data">
                @csrf
                <div class="row gx-4">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header">Form Surat Rekomendasi</div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="no_surat" class="col-sm-2 col-form-label">No. Surat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" placeholder="Nomor Surat" required>
                                    </div>
                                    @error('no_surat')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="kepsek" class="col-sm-2 col-form-label">Kepala Sekolah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('kepsek') is-invalid @enderror" name="kepsek" placeholder="Kepala Sekolah" required>
                                    </div>
                                    @error('kepsek')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" placeholder="NIP" required>
                                    </div>
                                    @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('keperluan') is-invalid @enderror" value="{{ old('keperluan') }}" name="keperluan" placeholder="Keperluan" required>
                                    </div>
                                    @error('keperluan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label for="tahun_ajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('tahun_ajaran') is-invalid @enderror" value="{{ old('tahun_ajaran') }}" name="tahun_ajaran" placeholder="Tahun Ajaran" required>
                                    </div>
                                    @error('tahun_ajaran')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3 row">
                                    <label for="format" class="col-sm-2 col-form-label">Format</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="format" value="{{ old('format') }}"  required autofocus >
                                            <option value="satu" selected>satu kolom</option>
                                            <option value="dua" >dua kolom</option>
                                        </select>
                                    </div>
                                    @error('format')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div> --}}

                                <div class="mb-3 row">
                                    <label for="nama_siswa" class="col-sm-2 col-form-label">Siswa 1</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control inline-input @error('nama_siswa') is-invalid @enderror" value="{{ old('nama_siswa') }}" name="nama_siswa[]" placeholder="Nama Siswa" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control inline-input @error('kelas') is-invalid @enderror" value="{{ old('kelas') }}" name="kelas[]" placeholder="Kelas" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control inline-input @error('nis') is-invalid @enderror" value="{{ old('nis') }}" name="nis[]" placeholder="NIS" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control inline-input @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" name="keterangan[]" placeholder="Keterangan" required>
                                    </div>

                                    @error('nama_siswa')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                    @error('kelas')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                    @error('nis')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                    @error('keterangan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror

                                </div>
                                <div id="additional-input">
                                </div>
                                <div class="mb-3 row">
                                    <label for="letter_file" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-md">Buat</button>
                                        <button type="button" onclick="tambahSiswa()" class="btn btn-success btn-md">Tambah Siswa</button>
                                        <button type="button" onclick="hapusSiswa()" class="btn btn-danger btn-md">Hapus Siswa</button>
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
        function tambahSiswa() {
        inputCounter++;

        var inputDiv = document.createElement('div');
        inputDiv.className = 'mb-3 row';
        inputDiv.id = 'divInput'+inputCounter;

        var label = document.createElement('label');
        label.for ='nama_siswa';
        label.className = 'col-sm-2 col-form-label'
        label.textContent = 'Siswa ' + inputCounter;

        var divNama = document.createElement('div');
        divNama.className = 'col-sm-3'

        var inputNama = document.createElement('input')
        inputNama.type = 'text';
        inputNama.name = 'nama_siswa[]';
        inputNama.className = 'form-control';
        inputNama.placeholder = 'Nama Siswa';

        divNama.appendChild(inputNama);

        var divKelas = document.createElement('div');
        divKelas.className = 'col-sm-3';

        var inputKelas = document.createElement('input');
        inputKelas.type = 'text';
        inputKelas.name = 'kelas[]';
        inputKelas.className = 'form-control';
        inputKelas.placeholder = 'Kelas';

        divKelas.appendChild(inputKelas);

        var divNis = document.createElement('div');
        divNis.className = 'col-sm-2'

        var inputNis = document.createElement('input');
        inputNis.type = 'text';
        inputNis.name = 'nis[]';
        inputNis.className = 'form-control';
        inputNis.placeholder = 'NIS';

        divNis.appendChild(inputNis);

        var divKeterangan = document.createElement('div');
        divKeterangan.className = 'col-sm-2'

        var inputKeterangan = document.createElement('input');
        inputKeterangan.type = 'text';
        inputKeterangan.name = 'keterangan[]';
        inputKeterangan.className = 'form-control';
        inputKeterangan.placeholder = 'Keterangan';

        divKeterangan.appendChild(inputKeterangan);

        inputDiv.appendChild(label);
        inputDiv.appendChild(divNama);
        inputDiv.appendChild(divKelas);
        inputDiv.appendChild(divNis);
        inputDiv.appendChild(divKeterangan);

        document.getElementById('additional-input').appendChild(inputDiv);
    }

    function hapusSiswa(){
            var inputDiv = document.getElementById('divInput'+inputCounter);
            inputDiv.remove();
            inputCounter--;
    }
    </script>
@endpush
