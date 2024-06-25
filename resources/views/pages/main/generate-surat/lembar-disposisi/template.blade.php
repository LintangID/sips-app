<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEMBAR DISPOSISI {{ $datas['isi_surat'] }}</title>
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
            font-size: 11pt;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
        }

        table.content {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table.content tr td {
            padding: 1px 2px 1px 3px;
        }

        table.content tr.border td {
            font-size: 11pt;
            border-bottom: 1px solid black;
        }

        table.content tr.border-bottom-left td {
            padding: 1 2 1 3;
            font-size: 11pt;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
        }

        table.content tr.border-left td {
            padding: 1 2 1 3;
            font-size: 11pt;
            border-left: 1px solid black;
        }
        /* table.content {
            border-top: 1px solid black;
            border-collapse: collapse;
        }

        table.content td{
            font-size: 11;
            font-family: Tahoma, "Trebuchet MS", sans-serif;
            text-align: left;
            vertical-align: top;
            padding-bottom: 5px;
        } */

    </style>
</head>
<body>
    <center>
       @include('includes.kop-surat-ld')
        <table class="content" width="500" style="margin-top: 2;">
            <tr class="border">
                <td style="text-align: center; padding-top:1px; padding-bottom:15px;" colspan="6">
                    <b>
                        <span style="font-size: 11pt">LEMBAR DISPOSISI</span>
                    </b>
                </td>
            </tr>
            <tr>
                <td width="50" style="vertical-align: top;">Surat Dari</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="245" style="vertical-align: top;text-align:justify;">
                    {{ $datas['asal_surat'] }}
                </td>

                <td width="70" style="vertical-align: top;">Diterima tgl</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="125" style="vertical-align: top;text-align:justify;">
                    {{ $datas['tgl_diterima'] }}
                </td>
            </tr>
            <tr>
                <td width="50" style="vertical-align: top;">No. Surat</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="245" style="vertical-align: top;text-align:justify;">
                    {{ $datas['no_surat'] }}
                </td>

                <td width="70" style="vertical-align: top;">No. Agenda</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="125" style="vertical-align: top;text-align:justify;">
                    {{ $datas['no_agenda'] }}
                </td>
            </tr>
            <tr class="border">
                <td width="50" style="vertical-align: top;">Tgl. Surat</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="245" style="vertical-align: top; text-align:justify;">
                    {{ $datas['tgl_surat'] }}
                </td>

                <td width="70" style="vertical-align: top;">Gol</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="125" style="vertical-align: top;text-align:justify;">
                    {{ $datas['golongan'] }}
                </td>
            </tr>
            <tr class="border">
                <td width="50" style="vertical-align: top;"></td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td  style="vertical-align: top; padding-bottom: 10; text-align:justify;" colspan="4">
                    {{ $datas['isi_surat'] }}
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    Diteruskan Kepada
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    ISI DISPOSISI
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    1. Waka Urs. Kurikulum
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    1. Untuk Di tindaklanjuti
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    2. Waka Urs. Sarpra
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    2. Untuk Dilaksanakan
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    3. Waka Urs. Kesiswaan
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    3. Untuk Dipelajari
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    4. Waka Urs. Humas
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    4. Untuk Difasilitasi
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    5. Koordinator BP/BK
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    5. Untuk Diinformasikan
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    6. Plt. Kasubag TU
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">

                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    7. Bendahara
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">

                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    8. Bp/Ibu
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">

                </td>
            </tr>
            <tr class="border-bottom-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    9. Guru mapel
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">

                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;">Catatan</td>
                <td width="10" style="text-align: left; vertical-align: top;border-left:0;" colspan="2">:</td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    Kepala Sekolah
                    <br><br><br>
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;"></td>
                <td width="10" style="text-align: left; vertical-align: top;border-left:0;" colspan="2"></td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    {{ $datas['kepsek'] }}
                </td>
            </tr>
            <tr class="border-bottom-left">
                <td width="50" style="vertical-align: top;"></td>
                <td width="10" style="text-align: left; vertical-align: top;border-left:0;" colspan="2"></td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    NIP. {{ $datas['nip'] }}
                </td>
            </tr>
        </table>
        <br><br>

        {{-- KEDUA --}}
        @include('includes.kop-surat-ld')
        <table class="content" width="500" style="margin-top: 2;">
            <tr class="border">
                <td style="text-align: center; padding-top:1px; padding-bottom:15px;" colspan="6">
                    <b>
                        <span style="font-size: 11pt">LEMBAR DISPOSISI</span>
                    </b>
                </td>
            </tr>
            <tr>
                <td width="50" style="vertical-align: top;">Surat Dari</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="245" style="vertical-align: top; text-align:justify;">
                    {{ $datas['asal_surat'] }}
                </td>

                <td width="70" style="vertical-align: top;">Diterima tgl</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="125" style="vertical-align: top; text-align:justify;">
                    {{ $datas['tgl_diterima'] }}
                </td>
            </tr>
            <tr>
                <td width="50" style="vertical-align: top;">No. Surat</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="245" style="vertical-align: top; text-align:justify;">
                    {{ $datas['no_surat'] }}
                </td>

                <td width="70" style="vertical-align: top;">No. Agenda</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="125" style="vertical-align: top; text-align:justify;">
                    {{ $datas['no_agenda'] }}
                </td>
            </tr>
            <tr class="border">
                <td width="50" style="vertical-align: top;">Tgl. Surat</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="245" style="vertical-align: top; text-align:justify;">
                    {{ $datas['tgl_surat'] }}
                </td>

                <td width="70" style="vertical-align: top;">Gol</td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td width="125" style="vertical-align: top; text-align:justify;">
                    {{ $datas['golongan'] }}
                </td>
            </tr>
            <tr class="border">
                <td width="50" style="vertical-align: top;"></td>
                <td width="5" style="text-align: center; vertical-align: top;">:</td>
                <td  style="vertical-align: top; padding-bottom: 10; text-align:justify;" colspan="4">
                    {{ $datas['isi_surat'] }}
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    Diteruskan Kepada
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    ISI DISPOSISI
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    1. Waka Urs. Kurikulum
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    1. Untuk Di tindaklanjuti
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    2. Waka Urs. Sarpra
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    2. Untuk Dilaksanakan
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    3. Waka Urs. Kesiswaan
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    3. Untuk Dipelajari
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    4. Waka Urs. Humas
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    4. Untuk Difasilitasi
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    5. Koordinator BP/BK
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    5. Untuk Diinformasikan
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    6. Plt. Kasubag TU
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">

                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    7. Bendahara
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">

                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    8. Bp/Ibu
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">

                </td>
            </tr>
            <tr class="border-bottom-left">
                <td width="50" style="vertical-align: top;" colspan="3">
                    9. Guru mapel
                </td>

                <td width="70" style="vertical-align: top;" colspan="3">

                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;">Catatan</td>
                <td width="10" style="text-align: left; vertical-align: top;border-left:0;" colspan="2">:</td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    Kepala Sekolah
                    <br><br><br>
                </td>
            </tr>
            <tr class="border-left">
                <td width="50" style="vertical-align: top;"></td>
                <td width="10" style="text-align: left; vertical-align: top;border-left:0;" colspan="2"></td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    {{ $datas['kepsek'] }}
                </td>
            </tr>
            <tr class="border-bottom-left">
                <td width="50" style="vertical-align: top;"></td>
                <td width="10" style="text-align: left; vertical-align: top;border-left:0;" colspan="2"></td>

                <td width="70" style="vertical-align: top;" colspan="3">
                    NIP. {{ $datas['nip'] }}
                </td>
            </tr>
        </table>
    </center>
</body>


