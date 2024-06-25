<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Rekomendasi {{ $datas['keperluan'] }}</title>
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
            font-size: 12;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
        }

        table.tabelSiswa tr td {
            font-size: 10;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
        }

        .bold{
            font-weight: bold;
        }

        .tabelSiswa {
            font-size: 10;
            float: left;
            border-collapse: collapse;
            border: 1px solid black ;
            margin-right: 1px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    {{-- {{ dd($mergedArray) }} --}}
    <center>
       @include('includes.kop-surat')
        <br>
        <table border='0' width="460">
            <tr>
                <td style="text-align: center;">
                    <b>
                        <u>
                            <font size="4">SURAT REKOMENDASI</font>
                        </u>
                    </b>
                </td>
            </tr>
        </table>
        <table border='0' width="460">
            <tr>
                <td style="text-align: center">
                    <font size="3">Nomor : {{ $datas['no_surat'] }}</font>
                </td>
            </tr>
        </table>
        <br>
        <table border="0" width="460">
            <tr>
                <td style="text-align: justify">Yang bertanda tangan di bawah ini, Kepala SMA Negeri 3 Boyolali memberikan rekomendasi kepada :</td>
            </tr>
        </table>
        <br>

        {{-- Tabel Siswa --}}
        <table border="0" width="460">
            <tr>
                <td width="160">Nama</td>
                <td width="5">:</td>
                <td>{{ $datas['nama_siswa'][0] }}</td>
            </tr>
            <tr>
                <td width="160">Kelas / NIS</td>
                <td width="5">:</td>
                <td>{{ $datas['kelas'][0] }} / {{ $datas['nis'][0] }}</td>
            </tr>
            <tr>
                <td width="160">Keterangan</td>
                <td width="5">:</td>
                <td>{{ $datas['keterangan'][0] }}</td>
            </tr>
        </table>
        <br>
        <table border="0" width="460" style="clear: left; margin-top:10px">
            <tr>
                <td style="text-align:justify">Siswa tersebut di atas adalah benar-benar siswa SMA Negeri 3 Boyolali Tahun Ajaran {{ $datas['tahun_ajaran'] }}.</td>
            </tr>
            <tr>
                <td style="text-align:justify">Yang bersangkutan diberikan rekomendasi untuk {{ $datas['keperluan'] }} dan menyatakan bahwa peserta didik tersebut berkelakuan baik dan berprestasi di bidang sebelumnya.</td>
            </tr>
        </table>
        <br>
        <table width="460">
            <tr>
                <td style="text-align: justify">Demikian surat rekomendasi ini dibuat untuk digunakan sebagai salah satu persyaratan untuk {{ $datas['keperluan'] }}.</td>
            </tr>
        </table>
        <br>

        {{-- Bagian tanda tangan kepsek--}}
        <table border="0" width="460">
            <tr>
                <td width="260"></td>
                <td style="text-align: left">Boyolali, <font id="tanggal">{{ $date_indo }}</font></td>
            </tr>
            <tr>
                <td width="260"></td>
                <td style="text-align: left">Kepala Sekolah</td>
            </tr>
        </table>
        <br><br><br>
        <table border="0" width="460">
            <tr>
                <td width="260"></td>
                <td style="text-align: left">{{ $datas['kepsek'] }}</td>
            </tr>
            <tr>

                <td width="260"></td>
                <td style="text-align: left">NIP. {{ $datas['nip'] }}</td>
            </tr>
        </table>
    </center>
</body>


