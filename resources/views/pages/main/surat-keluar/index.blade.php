@extends('layouts.main')

@section('title')
    Surat Keluar
@endsection

@section('container')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file-text"></i></div>
                                Surat Keluar
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-header-actions mb-4">
                        <div class="card-header ">
                            List Surat Keluar
                            <div class="card-header-actions">
                                <a class="btn btn-sm btn-success" href="{{ route('surat-keluar.create') }}">
                                    <i data-feather="plus"></i> &nbsp;
                                    Tambah Data
                                </a>
                                <a class="btn btn-sm btn-primary" href="{{ route('form-print-surat-keluar') }}">
                                    <i data-feather="printer"></i> &nbsp;
                                    Cetak Laporan
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- Alert --}}
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
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
                            {{-- List Data --}}
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md text-sm text-center" id="crudTable" width='1300px'>
                                    <thead>
                                        <tr>
                                            <th width="5%">No.</th>
                                            <th width="5%">No. Agenda</th>
                                            <th width="13%">Tanggal Agenda</th>
                                            <th width="13%">Tanggal Surat</th>
                                            <th widht="19%">No. Surat</th>
                                            <th width="27%">Isi  Surat</th>
                                            <th width="18%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
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
    var datatable = $('#crudTable').DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
          url: '{!! url()->current() !!}',
        },
        columns: [
          {
            "data": 'DT_RowIndex',
            orderable: false,
            searchable: false
          },
          { data: 'no_agenda', name: 'no_agenda',
            searchable: false },
          { data: 'tanggal_agenda', name: 'tanggal_agenda',
            searchable: false },
          { data: 'tanggal_surat', name: 'tanggal_surat',
            searchable: false },
          { data: 'no_surat', name: 'no_surat',
            searchable: false },
          { data: 'isi_surat',
            name: 'isi_surat'},
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searcable: false
          },
        ]
    });

    $(document).on('click', '.delete-btn', function (e) {
        e.preventDefault();

        var form = $(this).closest('form');
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Oke',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire({
                    title: 'Data berhasil dihapus!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
  </script>
@endpush



