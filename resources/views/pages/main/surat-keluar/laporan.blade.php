<!DOCTYPE html>
<html>

<head>
    <title>Cetak Laporan Surat Keluar</title>
    <style>
    body {
        font-family: arial, sans-serif;
        font-size: 12px;
        margin: auto;
    }

    .align-left {
        text-align: left;
    }

    h2 {
        margin-top: auto;
        text-align: center;
        left: 0px;
        right: 0px;
    }

    table {
        margin-top: 10px;
        text-align: center;
        border-collapse: collapse;
        width: 100%;
        padding: 4px;
    }

    table,
    th,
    td {
        padding: 4px;
        border: 1px solid black;
    }

    tr:nth-child(even) {
        background-color: #ddd;
        /* still not working */
    }
    </style>
</head>

<body>

    <h2>Laporan Surat Keluar</h2>

    <p>
        Tanggal di cetak: {{ date('d/m/Y') }}
    </p>

    <table>
        <tr>
            <th width='5%'>No</th>
            <th width='5%'>No. Agenda</th>
            <th width='10%'>Tanggal Agenda</th>
            <th width='10%'>Tanggal Surat</th>
            <th width='15%'>No. Surat</th>
            <th width='35%'>Isi Surat</th>
            <th width='5%'>Golongan</th>
            <th width='15%'>Keterangan</th>
        </tr>

        @if (!empty($datas))
            @foreach($datas as $data)
                <tr>
                    <td style="width:5%" >{{ $loop->iteration }}</td>
                    <td style="width:5%" >{{ $data->no_agenda }}</td>
                    <td style="width:10%" >{{  date('d-m-Y', strtotime($data->tanggal_agenda)) }}</td>
                    <td style="width:10%">{{ date('d-m-Y', strtotime($data->tanggal_surat)) }}</td>
                    <td style="width:15%">{{ $data->no_surat }}</td>
                    <td class="align-left" style="width:35%">{!! $data->isi_surat !!}</td>
                    <td style="width:5%" >{{ $data->golongan }}</td>
                    <td style="width:15%">{{ $data->keterangan }}</td>
                </tr>
            @endforeach
        @else
            <h3>Tidak ada data!</h3>
        @endif
    </table>

</body>

</html>
