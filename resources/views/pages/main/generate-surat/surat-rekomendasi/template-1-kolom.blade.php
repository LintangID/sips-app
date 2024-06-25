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
            font-size: 11;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
        }

        table.tabelSiswa tr td {
            border: 1px solid black;
            font-size: 11;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
        }

        table.tabelSiswa tr th {
            border: 1px solid black;
        }

        /* table.tabelSiswa tr th:last-child {
            border :none;
        }

        table.tabelSiswa tr td:last-child {
            border :none;
        } */

        .bold{
            font-weight: bold;
        }

        .tabelSiswa {
            font-size: 11;
            float: left;
            border-collapse: collapse;
            margin-right: auto;
            margin-left: auto;
        }

        .page {
            page-break-before: always;
        }
    </style>
</head>
<body>
    {{-- {{ dd($mergedArray) }} --}}
    <center>
       @include('includes.kop-surat')
        <br>
        <table border='0' width="500">
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
        <table border='0' width="500">
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
        <table width="458" class="tabelSiswa">
            <tr>
                <th width='5%' style="padding: 5px 3px 5px 3px;">No</th>
                <th width='40%' style="padding: 5px 3px 5px 3px;" >Nama</th>
                <th width='30%' style="padding: 5px 3px 5px 3px;">Kelas/NIS</th>
                <th width='20%' style="padding: 5px 3px 5px 3px;">Keterangan</th>

            </tr>
            @if (!empty($items))
                @foreach( $items as $item)
                        <tr>
                            <td  style="text-align: center">{{ $loop->iteration }}</td>
                            <td  style="padding: 5px 3px 5px 3px;">{{ $item['name'] }}</td>
                            <td  style="padding: 5px 3px 5px 3px;text-align: center">{{ $item['class'] }}/{{ $item['nis'] }}</td>
                            <td  style="padding: 5px 3px 5px 3px;text-align: center">{{ $item['keterangan'] }}</td>
                        </tr>
                @endforeach
            @else
                <h3>Tidak ada datas!</h3>
            @endif
        </table>

        <table border="0" width="460" style="clear: left; margin-top:20px">
            <tr>
                <td style="text-align: justify">Siswa tersebut di atas adalah benar-benar siswa SMA Negeri 3 Boyolali Tahun Ajaran {{ $datas['tahun_ajaran'] }}.</td>
            </tr>
            <br>
            <tr>
                <td style="text-align: justify">Yang bersangkutan diberikan rekomendasi untuk {{ $datas['keperluan'] }} dan menyatakan bahwa peserta didik tersebut berkelakuan baik dan berprestasi di bidang sebelumnya.</td>
            </tr>
        </table>
        <br>
        <table width="460"
        @if($hitung > 18 && $hitung <=20)
        class="page"
        @endif
        >
            <tr>
                <td style="text-align: justify">Demikian surat rekomendasi ini dibuat untuk digunakan sebagai salah satu persyaratan untuk {{ $datas['keperluan'] }}.</td>
            </tr>
        </table>
        <br>

        {{-- Bagian tanda tangan kepsek--}}
        <table border="0" width="460"
        @if($hitung > 12 && $hitung <=18)
        class="page"
        @endif
        >
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


