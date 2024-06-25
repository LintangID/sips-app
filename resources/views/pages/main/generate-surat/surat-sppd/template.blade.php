<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT PERINTAH PERJALANAN DINAS {{ $datas['nama_pegawai'] }}</title>
    <style>
        body {
            margin: 0 auto;
        }

        table{
            margin-left: auto;
            margin-right: auto;
        }

        table tr td {
            font-size: 11;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
            border-collapse: collapse;
        }

        table.tabelDeskripsi {
            border-top: 5px solid black;
            border-right: 0px solid black;
            border-bottom: 1px solid black;
            border-left: 0px solid black;
            border-collapse: collapse;
        }

        table.tabelDeskripsi td {
            font-size: 11;
            padding: 5px 2px 5px 2px;
            border-bottom: 1px solid black;
        }

        table.tabelDeskripsi td:last-child{
            border-left: 1px solid black;
        }

        table.content {
            border-top: 1px solid black;
            border-collapse: collapse;
        }

        table.content td{
            font-size: 11;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
            text-align: left;
            vertical-align: top;
            padding-bottom: 5px;
        }

        ol{
            padding: 0px 0px 0px 20px;
            margin: 0px 0px 0px 0px;
        }

        ul{
            padding: 0px 0px 0px 0px;
            margin: 0px 0px 0px 0px;
        }

        .bold{
            font-weight: bold;
        }

        .page {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <center>
       @include('includes.kop-surat')
        <br>
        <table border='0' width="500">
            <tr>
                <td style="text-align: center">
                    <b>
                        <u>
                            <font size="4">SURAT PERINTAH PERJALANAN DINAS</font>
                        </u>
                    </b>
                </td>
            </tr>

            <tr>
                <td style="text-align: center">
                    <font size="3">Nomor : {{ $datas['no_surat'] }}</font>
                </td>
            </tr>
        </table>
        <br>

        {{-- Content --}}
        <table class="tabelDeskripsi" width="460">
            <tr>
                <td width="10" style="text-align: left">1.</td>
                <td width="230" style="text-align: left" colspan="2">Pejabat yang memberi perintah</td>
                <td width="230" style="text-align: left">Kepala SMA Negeri 3 Boyolali</td>
            </tr>
            <tr>
                <td style="text-align: left">2.</td>
                <td style="text-align: left" colspan="2">Nama pegawai yang diperintahkan</td>
                <td style="text-align: left">{{ $datas['nama_pegawai'] }}</td>
            </tr>
            <tr>
                <td width="5" style="text-align: left; border-bottom:0;">3.</td>
                <td width="5" style="text-align: left; border-bottom:0;">a.</td>
                <td width="230" style="text-align: left; border-bottom:0;">Pangkat dan golongan menurut PP No.6 Th.1997</td>
                <td width="230" style="text-align: left; border-bottom:0;">{{ $datas['pangkat'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left; border-bottom:0;"></td>
                <td style="text-align: left; border-bottom:0;">b.</td>
                <td style="text-align: left; border-bottom:0;">Jabatan</td>
                <td style="text-align: left; border-bottom:0;">{{ $datas['jabatan'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left"></td>
                <td style="text-align: left">c.</td>
                <td style="text-align: left">Tingkat menurut perjalanan</td>
                <td style="text-align: left">{{ $datas['tingkat'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left">4.</td>
                <td style="text-align: left" colspan="2">Maksud perjalanan dinas</td>
                <td style="text-align: left">{{ $datas['maksud'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left">5.</td>
                <td style="text-align: left" colspan="2">Alat angkut yang dipergunakan</td>
                <td style="text-align: left">{{ $datas['angkutan'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left; border-bottom:0;">6.</td>
                <td style="text-align: left; border-bottom:0;">a.</td>
                <td style="text-align: left; border-bottom:0;">Tempat berangkat</td>
                <td style="text-align: left; border-bottom:0;">{{ $datas['keberangkatan'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left"></td>
                <td style="text-align: left">b.</td>
                <td style="text-align: left">Tempat tujuan
                </td>
                <td style="text-align: left">{{ $datas['tujuan'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left; border-bottom:0;">7.</td>
                <td style="text-align: left; border-bottom:0;">a.</td>
                <td style="text-align: left; border-bottom:0;">Lamanya perjalanan dinas</td>
                <td style="text-align: left; border-bottom:0;">{{ $datas['lama_perjalanan'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left; border-bottom:0;"></td>
                <td style="text-align: left; border-bottom:0;">b.</td>
                <td style="text-align: left; border-bottom:0;">Tanggal berangkat</td>
                <td style="text-align: left; border-bottom:0;">{{ $datas['tgl_berangkat'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left"></td>
                <td style="text-align: left">c.</td>
                <td style="text-align: left">Tanggal harus kembali</td>
                <td style="text-align: left">{{ $datas['tgl_kembali'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left">8.</td>
                <td style="text-align: left" colspan="2">Pengikut</td>
                <td style="text-align: left">
                    @if ($datas['pengikut'][0] != null && $datas['pengikut'][0] != "-")
                        @foreach ($datas['pengikut'] as $data)
                            <div style="margin-top:2;">
                                {{ $loop->iteration }}. {{ $data }}
                            </div>
                        @endforeach
                    @else
                        <div>-</div>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="text-align: left; border-bottom:0;">9.</td>
                <td style="text-align: left; border-bottom:0;" colspan="2">Pembebanan anggaran</td>
                <td style="text-align: left; border-bottom:0;">Dana BOS</td>
            </tr>
            <tr>
                <td style="text-align: left; border-bottom:0;"></td>
                <td style="text-align: left; border-bottom:0;">a.</td>
                <td style="text-align: left; border-bottom:0;">Instansi</td>
                <td style="text-align: left; border-bottom:0;">SMA Negeri 3 Boyolali</td>
            </tr>
            <tr>
                <td style="text-align: left"></td>
                <td style="text-align: left">b.</td>
                <td style="text-align: left">Mata anggaran</td>
                <td style="text-align: left">Perjalanan Dinas Dalam Daerah</td>
            </tr>
            <tr>
                <td style="text-align: left">10.</td>
                <td style="text-align: left" colspan="2">Keterangan lain-lain</td>
                <td style="text-align: left">{{ $datas['keterangan'] }}</td>
            </tr>
        </table>

        {{-- Tanda tangan --}}
        <br>
        <table border="0" width="500">
            <tr>
                <td width="300"></td>
                <td style="text-align: left">Boyolali, <font id="tanggal">{{ $date_indo }}</font></td>
            </tr>
            <tr>
                <td width="300"></td>
                <td style="text-align: left">Kepala Sekolah</td>
            </tr>
        </table>
        <br><br><br>
        <table border="0" width="500">
            <tr>
                <td width="300"></td>
                <td style="text-align: left">{{ $datas['kepsek'] }}</td>
            </tr>
            <tr>

                <td width="300"></td>
                <td style="text-align: left">NIP. {{ $datas['nip_kepsek'] }}</td>
            </tr>
        </table>

        <table class="page" border="0" width="500">
            <tr>
                <td width="200"></td>
                <td width="100" style="text-align: left">SPPD No.</font></td>
                <td width="5" style="text-align: left">:</td>
                <td style="text-align: left">{{ $datas['no_surat'] }}</td>
            </tr>
            <tr>
                <td width="200"></td>
                <td width="100" style="text-align: left">Berangkat dari (tempat kedudukan)</font></td>
                <td width="5" style="text-align: left">:</td>
                <td style="text-align: left">{{ $datas['keberangkatan'] }}</td>
            </tr>
            <tr>
                <td width="200"></td>
                <td width="100" style="text-align: left">Pada tanggal</font></td>
                <td width="5" style="text-align: left">:</td>
                <td style="text-align: left">{{ $datas['tgl_berangkat'] }}</td>
            </tr>
            <tr>
                <td width="200"></td>
                <td width="100" style="text-align: left">Ke</font></td>
                <td width="5" style="text-align: left">:</td>
                <td style="text-align: left">{{ $datas['tujuan'] }}</td>
            </tr>
            <tr>
                <td width="200"></td>
                <td colspan="3" style="text-align: left">Selaku yang melaksanakan Perjalanan Dinas</font></td>
            </tr>
            <tr>
                <td width="200"></td>
                <td colspan="3" style="text-align: left">
                    @if($datas['pengikut'][0] != null && $datas['pengikut'][0] != "-")
                        @foreach ($items as $item)
                            <div>
                                {{ $loop->iteration }}. {{ $item[0] }}
                            </div>
                        @endforeach
                    @else
                        <div>
                            1. {{ $datas['nama_pegawai'] }}
                        </div>
                    @endif
                </td>
            </tr>
        </table>
        <br><br>
        <table class="content" width="500" style="border-top: 0;" >
            <tr>
                <td width="12" >II.</td>
                <td width="40">Tiba di</td>
                <td width="5">:</td>
                <td width="170" style="padding-right: 10px;">{{ $datas['tujuan'] }}</td>
                <td width="70">Berangkat dari</td>
                <td width="5">:</td>
                <td>{{ $datas['tujuan'] }}</td>
            </tr>
            <tr>
                <td width="12"></td>
                <td width="40" rowspan="2" style="text-align: left; vertical-align:top;">Pada Tanggal</td>
                <td width="5">:</td>
                <td>{{{ $datas['tgl_berangkat'] }}}</td>
                <td width="70">Ke</td>
                <td width="5">:</td>
                <td>{{ $datas['keberangkatan'] }}</td>
            </tr>
            <tr>
                <td width="12"></td>
                <td colspan="2"></td>
                <td width="70">Pada Tanggal</td>
                <td width="5">:</td>
                <td>{{ $datas['tgl_kembali'] }}</td>
            </tr>
            <tr>
                <td width="12" ></td>
                <td width="35" >Kepala</td>
                <td width="5" colspan="5" >:</td>
            </tr>
        </table>
        <br><br>
        <table class="content" width="500" border="0">
            <tr>
                <td width="12" >III.</td>
                <td width="40">Tiba di</td>
                <td width="5">:</td>
                <td width="170" style="padding-right: 10px;">......................................................</td>
                <td width="70"></td>
                <td width="5">:</td>
                <td>......................................................</td>
            </tr>
            <tr>
                <td width="12"></td>
                <td width="40" rowspan="2" style="text-align: left; vertical-align:top;">Pada Tanggal</td>
                <td width="5">:</td>
                <td>.......................................................</td>
                <td width="70"></td>
                <td width="5">:</td>
                <td>......................................................</td>
            </tr>
            <tr>
                <td width="12"></td>
                <td colspan="2"></td>
                <td width="70"></td>
                <td width="5">:</td>
                <td>......................................................</td>
            </tr>
            <tr>
                <td width="12" ></td>
                <td width="35" >Kepala</td>
                <td width="5" colspan="5" >:</td>
            </tr>
        </table>
        <br><br>
        <table class="content" width="500" border="0">
            <tr>
                <td width="12" >IV.</td>
                <td width="40">Tiba di</td>
                <td width="5">:</td>
                <td width="170" style="padding-right: 10px;">......................................................</td>
                <td width="70"></td>
                <td width="5">:</td>
                <td>......................................................</td>
            </tr>
            <tr>
                <td width="12"></td>
                <td width="40" rowspan="2" style="text-align: left; vertical-align:top;">Pada Tanggal</td>
                <td width="5">:</td>
                <td>......................................................</td>
                <td width="70"></td>
                <td width="5">:</td>
                <td>......................................................</td>
            </tr>
            <tr>
                <td width="12"></td>
                <td colspan="2"></td>
                <td width="70"></td>
                <td width="5">:</td>
                <td>......................................................</td>
            </tr>
            <tr>
                <td width="12" ></td>
                <td width="35" >Kepala</td>
                <td width="5" colspan="5" >:</td>
            </tr>
        </table>
        <br>
        <table class="content" width="500" style="border-top: 0;" border="0">
            <tr>
                <td width="12" >V.</td>
                <td width="75">Tiba kembali di</td>
                <td width="5">:</td>
                <td style="padding-right: 10px;">{{ $datas['keberangkatan'] }}</td>
            </tr>
            <tr>
                <td width="12" ></td>
                <td width="75">Pada Tanggal</td>
                <td width="5">:</td>
                <td style="padding-right: 10px;">{{ $datas['tgl_kembali'] }}</td>
            </tr>
            <tr>
                <td width="12" ></td>
                <td colspan="3">
                    Telah diperiksa, dengan keterangan bahwa perjalanan tersebut di atas benar dilakukan atas perintahnya dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya.
                </td>
            </tr>
        </table>

        {{-- Tanda Tangan --}}
        <br>
        <table border="0" width="500">
            <tr>
                <td width="300"></td>
                <td style="text-align: left">Kepala Sekolah</td>
            </tr>
        </table>
        <br><br><br>
        <table border="0" width="500">
            <tr>
                <td width="300"></td>
                <td style="text-align: left">{{ $datas['kepsek'] }}</td>
            </tr>
            <tr>

                <td width="300"></td>
                <td style="text-align: left">NIP. {{ $datas['nip_kepsek'] }}</td>
            </tr>
        </table>
        <br>
        <table class="content" width="500" style="border-bottom: 1px solid black;">
            <tr>
                <td width="12" style="padding:5px 0 5px 0; " >VI.</td>
                <td style="padding:5px 0 5px 0;">CATATAN LAIN-LAIN</td>
            </tr>
        </table>
    </center>
</body>


