<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN KEGIATAN {{ $datas['nama_guru'] }}</title>
    <style>
        body {
            margin: 0 auto;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }

        table tr td {
            font-size: 11;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
        }

        .bold{
            font-weight: bold;
        }

        .tabelDeskripsi{
            border: 3px solid black;
        }

        .tabelTandaTangan{
            width: 480px;
            border: 0px solid;

        }
    </style>
</head>
<body>
    <center>
       @include('includes.kop-surat')
       <table border="0" width="480">
            <tr>
                <td width="280"></td>
                <td style="text-align: right"><i>Lampiran : {{ $datas['no_surat'] }}</i></td>
            </tr>
        </table>
        <br>
        <table border='0' width="480">
            <tr>
                <td style="text-align: center">
                    <b>
                        <u>
                            <font size="4">LAPORAN KEGIATAN</font>
                        </u>
                    </b>
                </td>
            </tr>
        </table>

        <br>
        <table border="0" width="480">
            <tr>
                <td width="150" style="vertical-align: top;">Nama</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td  style="vertical-align: top;">{{ $datas['nama_guru'] }}</td>
            </tr>
            <tr>
                <td width="150" style="vertical-align: top;">NIP</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td style="vertical-align: top;">{{ $datas['nip_guru'] }}</td>
            </tr>
            <tr>
                <td width="150" style="vertical-align: top;">Hari / Tanggal</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td style=" vertical-align: top;">{{ $datas['hari'] }}</td>
            </tr>
            <tr>
                <td width="150" style="vertical-align: top;" rowspan="3">Tempat</td>
                <td width="10" style="text-align: center; vertical-align: top;" rowspan="3">:</td>
                <td  rowspan="3" style="vertical-align: top;">
                    {{ $datas['tempat'] }}
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td width="150" style="vertical-align: top;">Nama Kegiatan</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td style="vertical-align: top;">
                    {{ $datas['kegiatan'] }}
                </td>
            </tr>
        </table>
        <br><br>
        <table border="0" width="480">
            <tr>
                <td style="text-align: left"><b>Deskripsi</b></td>
            </tr>
        </table>

        {{-- Tabel Deskripsi --}}
        <table class="tabelDeskripsi" width="480" height="400">
            <tr>
                <td style="text-align: left" width="480" height="300"></td>
            </tr>
        </table>
        <br>

        {{-- Tanda Tangan --}}
        <table class="tabelTandaTangan">
            <tr>
                <td style="text-align: left" width="165">Mengetahui</td>
                <td width="150"></td>
                <td style="text-align: left" width="165">Boyolali, <font id="tanggal">{{ $date_indo }}</font></td>
            </tr>
            <tr>
                <td style="text-align: left" width="165">Kepala Sekolah</td>
                <td width="150"></td>
                <td style="text-align: left" width="165">Yang Melaksanakan Tugas</td>
            </tr>
        </table>
        <br><br><br>
        <table class="tabelTandaTangan">
            <tr>
                <td style="text-align: left" width="165">{{ $datas['kepsek'] }}</td>
                <td width="150"></td>
                <td style="text-align: left" width="165">{{ $datas['nama_guru'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left" width="165">NIP. {{ $datas['nip_kepsek'] }}</td>
                <td width="150"></td>
                <td style="text-align: left" width="165">NIP. {{ $datas['nip_guru'] }}</td>
            </tr>
        </table>
    </center>
</body>


