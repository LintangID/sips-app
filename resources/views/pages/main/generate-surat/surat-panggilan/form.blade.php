@extends('layouts.main')

@section('title')
    Buat Surat Panggilan
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
                                Surat Panggilan
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
            <form action="{{ route('buat-sp') }}" method="post" target="_blank" enctype="multipart/form-data">
                @csrf
                <div class="row gx-4">
                    <div class="col-lg-10">
                        <div class="card mb-4">
                            <div class="card-header">Form Surat Panggilan</div>
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
                                    <label for="hal" class="col-sm-3 col-form-label">Hal</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('hal') is-invalid @enderror" name="hal" placeholder="Hal" required>
                                    </div>
                                    @error('hal')
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
                                    <label for="nama_ortu" class="col-sm-3 col-form-label">Nama Orang Tua</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('nama_ortu') is-invalid @enderror" value="{{ old('nama_ortu') }}" name="nama_ortu" placeholder="Nama Orang Tua" required>
                                    </div>
                                    @error('nama_ortu')
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
                                    <label for="hari" class="col-sm-3 col-form-label">Hari, tanggal</label>
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
                                    <label for="waktu" class="col-sm-3 col-form-label">Pukul</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('waktu') is-invalid @enderror" value="{{ old('waktu') }}" name="waktu" placeholder="Pukul" required>
                                    </div>
                                    @error('waktu')
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
                                    <label for="nama_guru" class="col-sm-3 col-form-label">Keterangan Menemui</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control inline-input @error('nama_guru') is-invalid @enderror" value="{{ old('nama_guru') }}" name="nama_guru[]" placeholder="Nama" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control inline-input @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}" name="jabatan[]" placeholder="Jabatan" required>
                                    </div>
                                    @error('nama_guru')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                    @error('jabatan')
                                        <div class="invalid-feedback">
                                            {{ $message; }}
                                        </div>
                                    @enderror
                                </div>
                                <div id="additional-input">
                                </div>
                                <div class="mb-3 row">
                                    <label for="letter_file" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
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
        label.for ='nama_guru';
        label.className = 'col-sm-3 col-form-label'

        var divNama = document.createElement('div');
        divNama.className = 'col-sm-5'

        var inputNama = document.createElement('input')
        inputNama.type = 'text';
        inputNama.name = 'nama_guru[]';
        inputNama.className = 'form-control';
        inputNama.placeholder = 'Nama';

        divNama.appendChild(inputNama);

        var divJabatan = document.createElement('div');
        divJabatan.className = 'col-sm-4';

        var inputJabatan = document.createElement('input');
        inputJabatan.type = 'text';
        inputJabatan.name = 'jabatan[]';
        inputJabatan.className = 'form-control';
        inputJabatan.placeholder = 'Jabatan';

        divJabatan.appendChild(inputJabatan);

        inputDiv.appendChild(label);
        inputDiv.appendChild(divNama);
        inputDiv.appendChild(divJabatan);

        document.getElementById('additional-input').appendChild(inputDiv);
    }

    function hapusSiswa(){
            var inputDiv = document.getElementById('divInput'+inputCounter);
            inputDiv.remove();
            inputCounter--;
    }
    </script>
@endpush
