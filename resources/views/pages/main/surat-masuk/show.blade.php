@extends('layouts.main')

@section('title')
   Detail Surat
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
                                Detail Surat
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
            <div class="row gx-4">
                <div class="col-lg-10">
                    <div class="card mb-4">
                        <div class="card-header">Detail Surat</div>
                        <div class="card-body">
                            <div class=" mb-3 row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th >Nomor Agenda</th>
                                                <td>{{ $item->no_agenda }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Agenda</th>
                                                <td>{{ $item->tanggal_agenda }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Surat</th>
                                                <td>{{ $item->tanggal_surat }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nomor Surat</th>
                                                <td>{{ $item->no_surat }}</td>
                                            </tr>
                                            <tr>
                                                <th>Asal Surat</th>
                                                <td>{{ $item->asal_surat }}</td>
                                            </tr>
                                            <tr>
                                                <th>Isi Surat</th>
                                                <td>{!! $item->isi_surat !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Golongan</th>
                                                <td>{{ $item->golongan }}</td>
                                            </tr>
                                            <tr>
                                                <th>Diteruskan Kepada</th>
                                                <td>{{ $item->diteruskan_kepada }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nama TTD Penerima</th>
                                                <td>{{ $item->nama_ttd_penerima }}</td>
                                            </tr>
                                            <tr>
                                                <th>Keterangan</th>
                                                <td>{{ $item->keterangan }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection

