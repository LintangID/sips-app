<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Panggilan {{ $datas['nama_siswa'] }}</title>
    <style>
        body {
            margin: 0 auto;
        }

        table{
            margin-left: auto;
            margin-right: auto;
        }

        table tr td {
            font-size: 12;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
            padding: 5px 0px 5px 0px;
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
                <td width="50" style="vertical-align: top;">Nomor</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td width="200" style="vertical-align: top;">
                    {{ $datas['no_surat'] }}
                </td>
                <td style="text-align: right">Boyolali, <font id="tanggal">{{ $date_indo }}</font></td>
            </tr>
            <tr>
                <td width="50" style="vertical-align: top;">Hal</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td style="vertical-align: top;" colspan="2">
                    {{ $datas['hal'] }}
                </td>
            </tr>
        </table>
        <br><br>
        <table border="0" width="460">
            <tr>
                <td style="text-align: left">Kepada Yth Bapak/Ibu {{ $datas['nama_ortu'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left">Orang tua siswa dari {{ $datas['nama_siswa'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left">Kelas {{ $datas['kelas'] }}</td>
            </tr>
            <tr>
                <td style="text-align: left">{{ $datas['alamat'] }}</td>
            </tr>
        </table>
        <br>
        <br>

        <table border="0" width="460" style="clear: left; margin-top:10px">
            <tr>
                <td style="text-align: justify">Mengharap dengan hormat kehadiran Bapak/Ibu pada :</td>
            </tr>
        </table>
        <table width="460">
            <tr>
                <td width="80" style="vertical-align: top;">Hari, tanggal</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td colspan="3" style="vertical-align: top;">
                    {{ $datas['hari'] }}
                </td>
            </tr>
            <tr>
                <td width="80" style="vertical-align: top;">Waktu</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td colspan="3" style="vertical-align: top;">
                    {{ $datas['waktu'] }}
                </td>
            </tr>
            <tr>
                <td width="80" style="vertical-align: top;">Tempat</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td colspan="3" style="vertical-align: top;">
                    {{ $datas['tempat'] }}
                </td>
            </tr>
            <tr>
                <td width="80" style="vertical-align: top;">Keperluan</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td colspan="3" style="vertical-align: top;">
                    {{ $datas['keperluan'] }}
                </td>
            </tr>
            <tr>
                <td width="80" style="vertical-align: top;">Keterangan</td>
                <td width="10" style="text-align: center; vertical-align: top;">:</td>
                <td width="60" style="vertical-align: top;">
                    Menemui
                </td>
                <td>
                    @foreach ($items as $item)
                        <div style="margin-bottom: 10px">
                            {{ $loop->iteration }}. {{ $item['jabatan'] }}
                        </div>
                    @endforeach
                </td>
                <td>
                    @foreach ($items as $item)
                        <div style="margin-bottom: 10px">
                            ({{ $item['nama'] }})
                        </div>
                    @endforeach
                </td>
            </tr>

        </table>
        <table width="460" style="margin-top: -10px">
            <tr>
                <td style="text-align: left">Atas perhatian dan kehadiran Bapak/Ibu diucapkan terima kasih.</td>
            </tr>
        </table>
        <br>

        {{-- Bagian tanda tangan kepsek--}}
        <table border="0" width="460">
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
    </center>
</body>


