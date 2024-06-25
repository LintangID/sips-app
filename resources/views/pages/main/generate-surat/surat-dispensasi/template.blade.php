<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Dispensasi {{ $datas['keperluan'] }}</title>
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
                <td style="text-align: center">
                    <b>
                        <u>
                            <font size="4">SURAT DISPENSASI</font>
                        </u>
                    </b>
                </td>
            </tr>

            <tr>
                <td style="text-align: center">
                    <b>
                        <font size="3">Nomor : {{ $datas['no_surat'] }}</font>
                    </b>
                </td>
            </tr>
        </table>
        <br>
        <table border="0" width="500">
            <tr>
                <td style="text-align: left">Yang bertanda tangan di bawah ini, Kepala SMA Negeri 3 Boyolali memberikan dispensasi kepada :</td>
            </tr>
        </table>
        <br>

        {{-- Tabel Siswa --}}
        <table border="1" width="230" class="tabelSiswa">
            <tr>
                <th width='5%'>No</th>
                <th width='60%'>Nama</th>
                <th width='35%'>Kelas/NIS</th>
            </tr>
            @if (!empty($items))
                @foreach( $items as $item)
                    @if ($loop->iteration <= $setengahJumlah)
                        <tr>
                            <td  style="text-align: center">{{ $loop->iteration }}</td>
                            <td  width='134'>{{ $item['name'] }}</td>
                            <td  width='84'>{{ $item['class'] }}/{{ $item['nis']}}</td>
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
                <th width='35%'>Kelas/NIS</th>
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
                    <td  width='84'>{{ $item['class']}}/{{ $item['nis']}}</td>
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
                <td style="text-align: left">Untuk diberikan Dispensasi penuh tidak mengikuti kegiatan belajar mengajar karena {{ $datas['keperluan'] }}</td>
            </tr>
        </table>
        <table border="0" width="500">
            <tr>
                <td width="80" style="vertical-align: top;">Hari, tanggal</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td style="vertical-align: top;">
                    {{ $datas['hari'] }}
                </td>
            </tr>
            <tr>
                <td width="80" style="vertical-align: top;">Pukul</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td style="vertical-align: top;">
                    {{ $datas['waktu'] }}
                </td>
            </tr>
            <tr>
                <td width="80" style="vertical-align: top;">Tempat</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td style="vertical-align: top;">
                    {{ $datas['tempat'] }}
                </td>
            </tr>

        </table>
        <table width="500">
            <tr>
                <td style="text-align: left">Demikian Surat Dispensasi ini dibuat untuk digunakan sebagai salah satu persyaratan {{ $datas['keperluan'] }}.</td>
            </tr>
        </table>
        <br>

        {{-- Bagian tanda tangan kepsek--}}
        <table border="0" width="500">
            <tr>
                <td width="280"></td>
                <td style="text-align: left">Boyolali, <font id="tanggal">{{ $date_indo }}</font></td>
            </tr>
            <tr>
                <td width="280"></td>
                <td style="text-align: left">Kepala Sekolah</td>
            </tr>
        </table>
        <br><br><br>
        <table border="0" width="500">
            <tr>
                <td width="280"></td>
                <td style="text-align: left">{{ $datas['kepsek'] }}</td>
            </tr>
            <tr>

                <td width="280"></td>
                <td style="text-align: left">NIP. {{ $datas['nip'] }}</td>
            </tr>
        </table>
    </center>
</body>


