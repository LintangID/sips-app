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
                <div class="col-lg-7">
                    <div class="card mb-4">
                        <div class="card-header">Detail Surat</div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Nomor Agenda</th>
                                                <td>{{ $item->no_agenda }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Agenda</th>
                                                <td>{{  date('d-m-Y', strtotime($item->tanggal_agenda)) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Surat</th>
                                                <td>{{ date('d-m-Y', strtotime($item->tanggal_surat)) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nomor Surat</th>
                                                <td>{{ $item->no_surat }}</td>
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
                <div class="col-lg-5">
                    <div class="card mb-4">
                        <div class="card-header">
                            File Surat -
                            <a href="{{ route('download-surat', $item->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Surat
                            </a>
                        </div>
                        <div class="card-body">
                                @if ($item->file_surat)
                                    <div class="mb-3 row">
                                        <embed src="{{ asset('storage/'.$item->file_surat) }}" width="500" height="375" type="application/pdf">
                                    </div>
                                @else
                                    <div style="text-align:center; font-size:18px; font-weight:bold; font-family:'Courier New', Courier, monospace">
                                        Tidak ada file
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
