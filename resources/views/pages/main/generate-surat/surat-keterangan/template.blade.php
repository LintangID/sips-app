<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT KETERANGAN {{ $data['nama_siswa'] }}</title>
    <style>
        table {
            margin-left: auto;
            margin-right: auto;
        }

        table tr td {
            font-size: 12;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
        }

        .bold{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <center>
       @include('includes.kop-surat')
        <br>
        <table border='0' width="460">
            <tr>
                <td style="text-align: center">
                    <b>
                        <u>
                            <font size="4">SURAT KETERANGAN</font>
                        </u>
                    </b>
                </td>
            </tr>

            <tr>
                <td style="text-align: center">
                    <b>
                        <font size="3">Nomor : {{ $data['no_surat'] }}</font>
                    </b>
                </td>
            </tr>
        </table>
        <br>
        <table border="0" width="460">
            <tr>
                <td style="text-align: justify">Yang bertanda tangan di bawah ini, Kepala SMA Negeri 3 Boyolali menerangkan bahwa :</td>
            </tr>
        </table>
        <br>
        <table border="0" width="460">
            <tr>
                <td width="200" style="vertical-align: top;">Nama</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td class="bold" style="vertical-align: top;">{{ $data['nama_siswa'] }}</td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top;">Kelas / NIS / NISN</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td class="bold"style="vertical-align: top;">{{ $data['kelas'] }}/{{ $data['nis/nisn'] }}</td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top;">Tempat, tanggal lahir</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td class="bold"style=" vertical-align: top;">{{ $data['ttl'] }}</td>
            </tr>
            <tr>
                <td width="200" style="vertical-align: top;" rowspan="3">Alamat</td>
                <td width="10" style="text-align: center; vertical-align: top;" rowspan="3">:</td>
                <td class="bold" rowspan="3" style="vertical-align: top;">
                    {{ $data['alamat'] }}
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td width="200" style="vertical-align: top;">NPSN</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td class="bold"style="vertical-align: top;">
                    {{ $data['npsn'] }}
                </td>
            </tr>
        </table>
        <br>
        <table border="0" width="460">
            <tr>
                <td style="text-align: justify">Adalah benar-benar peserta didik aktif di SMA Negeri 3 Boyolali kelas <b>{{ $data['kelas'] }}, Tahun Pelajaran {{ $data['tahun_pelajaran'] }}</b>, dan peserta didik tersebut {{ $data['keterangan'] }}.</td>
            </tr>
            <br>
            <tr>
                <td style="text-align: justify">
                    Surat keterangan ini diberikan untuk {{ $data['keperluan'] }}.
                </td>
            </tr>
            <br>
            <tr>
                <td style="text-align: justify">Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</td>
            </tr>
        </table>
        <br>
        <table border="0" width="460">
            <tr>
                <td width="269"></td>
                <td style="text-align: left">Boyolali, <font id="tanggal">{{ $date_indo }}</font></td>
            </tr>
            <tr>
                <td width="269"></td>
                <td style="text-align: left">Kepala Sekolah</td>
            </tr>
        </table>
        <br><br><br>
        <table border="0" width="460">
            <tr>
                <td width="269"></td>
                <td style="text-align: left">{{ $data['kepsek'] }}</td>
            </tr>
            <tr>
                <td width="269"></td>
                <td style="text-align: left">NIP. {{ $data['nip'] }}</td>
            </tr>
        </table>
    </center>
</body>


