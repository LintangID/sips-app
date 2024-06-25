<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Tugas {{ $datas['keperluan'] }}</title>
    <style>
        body {
            margin: 0 auto;
        }

        table{
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }

        table tr td {
            font-size: 11;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
        }

        table.tabelStaff tr td {
            border: 1px solid black;
            font-size: 11;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
        }

        table.tabelStaff tr th {
            border: 1px solid black;
        }

        /* table.tabelStaff tr th:last-child {
            border :none;
        }

        table.tabelStaff tr td:last-child {
            border :none;
        } */

        .bold{
            font-weight: bold;
        }

        td.border-bottom{
            border-bottom: 2px solid black;
        }
        .tabelStaff {
            font-size: 11;
            border-collapse: collapse;
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
        <table border='0' width="460">
            <tr>

                <td  style="text-align: center;">
                    <b>
                        <u>
                            <font size="4">SURAT TUGAS</font>
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
                <td width="100" style="vertical-align: top;">Dasar</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td  style="text-align:justify; vertical-align: top;">{{ $datas['dasar'] }}</td>
            </tr>
        </table>
        <br>
        <table border='0' width="460">
            <tr>
                <td width="165"></td>
                <td style="text-align: center;">
                    <b>
                        <font size="3">MEMERINTAHKAN</font>
                    </b>
                </td>
                <td width="165"></td>
            </tr>
        </table>
        <br>

        <table border="0" width="460">
            <tr>
                <td width="40" style="vertical-align: top;">Kepada</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td  style="vertical-align: top;"></td>
            </tr>
        </table>

        {{-- Tabel Staff --}}
        <div>
            <table width="458" class="tabelStaff">
                <tr>
                    <th width='5%' style="padding: 5px 3px 5px 3px;">No</th>
                    <th width='40%' style="padding: 5px 3px 5px 3px;">Nama</th>
                    <th width='30%' style="padding: 5px 3px 5px 3px;">NIP/NIS/Kelas</th>
                    <th width='25%' style="padding: 5px 3px 5px 3px;">Jabatan</th>
                </tr>
                @if (!empty($items))
                    @foreach( $items as $item)
                            <tr>
                                <td  style="padding: 5px 3px 5px 3px; text-align: center">{{ $loop->iteration }}</td>
                                <td  style="padding: 5px 3px 5px 3px;">{{ $item['nama'] }}</td>
                                <td  style="padding: 5px 3px 5px 3px; text-align: center">{{ $item['nip_staff'] }}</td>
                                <td  style="padding: 5px 3px 5px 3px; text-align: center;">{{ $item['jabatan'] }}</td>
                            </tr>
                    @endforeach
                @else
                    <h3>Tidak ada data!</h3>
                @endif
            </table>
        </div>
        <table border="0" width="460" style="clear: left; margin-top:10px">
            <tr>
                <td style="text-align: justify">Untuk {{ $datas['keperluan'] }} pada :</td>
            </tr>
        </table>
        <br>
        <table width="460"
        @if($hitung > 16 && $hitung <=22)
        class="page"
        @endif
        >
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
        <br>
        <table width="460"
        @if($hitung > 12 && $hitung <=16)
        class="page"
        @endif
        >
            <tr>
                <td style="text-align: justify">Demikian surat tugas ini dibuat, mohon dilaksanakan sebaik-baiknya dengan penuh tanggung jawab, dan memberikan laporan setelah selesainya pelaksanaan tugas.</td>
            </tr>
        </table>
        <br>
        {{-- Bagian tanda tangan kepsek--}}
        <table border="0" width="460"
        @if($hitung > 10 && $hitung <= 12)
        class="page"
        @endif
        >
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
                <td style="text-align: left">{{ $datas['kepsek'] }}</td>
            </tr>
            <tr>

                <td width="269"></td>
                <td style="text-align: left">NIP. {{ $datas['nip'] }}</td>
            </tr>
        </table>

        <br>
        <table border="0" width="460"
        @if($hitung > 5 && $hitung <= 10)
        class="page"
        @endif
        >
            <tr>
                <td style="text-align: left">Telah datang</td>
                <td width="300"></td>
            </tr>
            <tr>
                <td style="text-align: left">Dan Melaksanakan Tugas</td>
                <td width="300"></td>
            </tr>
            <tr>
                <td style="text-align: left">Di___________________</td>
                <td width="300"></td>
            </tr>
        </table>
        <br><br><br>
        <table border="0" width="460">
            <tr>
                <td style="text-align: left">_____________________</td>
                <td width="300"></td>
            </tr>
        </table>
    </center>
</body>


