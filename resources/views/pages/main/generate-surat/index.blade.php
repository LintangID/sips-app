@extends('layouts.main')

@section('title')
    Buat Surat
@endsection

@section('container')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="folder"></i></div>
                                Buat Surat
                            </h1>
                            <div class="page-header-subtitle">Halaman Buat Surat</div>
                        </div>
                        {{-- <div class="col-12 col-xl-auto mt-4">
                            <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                                <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                                <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">

            <!-- Example Colored Cards for Dashboard Demo-->
            <div class="row">
                {{-- Surat Keterangan --}}
                <div class="col-sm-12 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Jenis Surat</div>
                                    <div class="text-lg fw-bold">Surat Keterangan</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="mail"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="{{ route('form-sk','sk') }}">Buat</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                {{-- Surat Panggilan --}}
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Jenis Surat</div>
                                    <div class="text-lg fw-bold">Surat Panggilan</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="mail"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="{{ route('form-sp','sp') }}">Buat</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                {{-- Surat Tugas --}}
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Jenis Surat</div>
                                    <div class="text-lg fw-bold">Surat Tugas</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="mail"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="{{ route('form-st','st') }}">Buat</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                {{-- Surat SPPD --}}
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Jenis Surat</div>
                                    <div class="text-lg fw-bold">SPPD</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="mail"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="{{ route('form-sppd','sppd') }}">Buat</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                {{-- Laporan Kegiatan --}}
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Jenis Surat</div>
                                    <div class="text-lg fw-bold">Laporan Kegiatan</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="mail"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="{{ route('form-lk', 'lk') }}">Buat</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                {{-- Surat Dispensasi --}}
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Jenis Surat</div>
                                    <div class="text-lg fw-bold">Surat Dispensasi</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="mail"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="{{ route('form-sd','sd') }}">Buat</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                {{-- Surat Rekomendasi --}}
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Jenis Surat</div>
                                    <div class="text-lg fw-bold">Surat Rekomendasi</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="mail"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="{{ route('form-sr','sr') }}">Buat</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                {{-- Lembar Disposisi --}}
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Jenis Surat</div>
                                    <div class="text-lg fw-bold">Lembar Disposisi</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="mail"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="{{ route('form-ld','ld') }}">Buat</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
