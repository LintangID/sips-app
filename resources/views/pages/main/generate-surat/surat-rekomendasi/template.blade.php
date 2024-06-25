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

        td.border-bottom{
            border-bottom: 2px dashed black;
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
        <table border='0' width="500">
            <tr>
                <td width="165"></td>
                <td class="border-bottom" style="text-align: center;">
                    <b>
                        <font size="4">SURAT REKOMENDASI</font>
                    </b>
                </td>
                <td width="165"></td>
            </tr>
        </table>
        <table border='0' width="500">
            <tr>
                <td width="115"></td>
                <td style="text-align: center">
                    <font size="3">Nomor : {{ $datas['no_surat'] }}</font>
                </td>
                <td width="115"></td>
            </tr>
        </table>
        <br>
        <table border="0" width="500" style="padding-right: 30px;">
            <tr>
                <td style="text-align: left">Yang bertanda tangan di bawah ini, Kepala SMA Negeri 3 Boyolali memberikan rekomendasi kepada :</td>
            </tr>
        </table>
        <br>

        {{-- Tabel Siswa --}}
        <table border="1" width="230" class="tabelSiswa">
            <tr>
                <th width='5%'>No</th>
                <th width='60%'>Nama</th>
                <th width='35%'>Kelas</th>
            </tr>
            @if (!empty($items))
                @foreach( $items as $item)
                    @if ($loop->iteration <= $setengahJumlah)
                        <tr>
                            <td  style="text-align: center">{{ $loop->iteration }}</td>
                            <td  width='134'>{{ $item['name'] }}</td>
                            <td  width='84'>{{ $item['class'] }}</td>
                        </tr>
                        @php
                        $i = $loop->iteration;
                        @endphp
                    @endif
                @endforeach
            @else
                <h3>Tidak ada datas!</h3>
            @endif
        </table>

        @if(count($items)>1)
        <table border="1" width="230" class="tabelSiswa">
            <tr>
                <th width='5%'>No</th>
                <th width='60%'>Nama</th>
                <th width='35%'>Kelas</th>
            </tr>
            @if (!empty($items))
                @php
                $index = 1;
                @endphp
                @foreach( $items as $item)
                @if ($index > $i )
                <tr>
                    <td  style="text-align: center">{{ $index }}</td>
                    <td  width='134'>{{ $item['name']}}</td>
                    <td  width='84'>{{ $item['class']}}</td>
                </tr>
                @endif
                @php
                    $index++;
                @endphp
                @endforeach
            @else
                <h3>Tidak ada datas!</h3>
            @endif
        </table>
        @endif
        <table border="0" width="500" style="clear: left; margin-top:10px">
            <tr>
                <td style="text-align: left">Siswa tersebut di atas adalah benar-benar siswa SMA Negeri 3 Boyolali Tahun Ajaran {{ $datas['tahun_ajaran'] }}. Yang bersangkutan diberikan rekomendasi untuk {{ $datas['keperluan'] }}</td>
            </tr>
        </table>
        <br>
        <table width="500">
            <tr>
                <td style="text-align: left">Demikian surat rekomendasi ini dibuat untuk digunakan sebagai salah satu persyaratan untuk {{ $datas['keperluan'] }}.</td>
            </tr>
        </table>
        <br>

        {{-- Bagian tanda tangan kepsek--}}
        <table border="0" width="500">
            <tr>
                <td width="320"></td>
                <td style="text-align: left">Boyolali, <font id="tanggal">{{ $date_indo }}</font></td>
            </tr>
            <tr>
                <td width="320"></td>
                <td style="text-align: left">Kepala Sekolah</td>
            </tr>
        </table>
        <br><br><br>
        <table border="0" width="500">
            <tr>
                <td width="320"></td>
                <td style="text-align: left">{{ $datas['kepsek'] }}</td>
            </tr>
            <tr>

                <td width="320"></td>
                <td style="text-align: left">NIP. {{ $datas['nip'] }}</td>
            </tr>
        </table>
    </center>
</body>


