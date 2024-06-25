<!DOCTYPE html>
<html>

<head>
    <title>Laporan Surat Masuk</title>
    <style>
    body {
        font-family: arial, sans-serif;
        font-size: 11px;
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
        padding: 3%;
    }

    table,
    th,
    td {
        padding: 3px;
        border: 1px solid black;
    }

    tr:nth-child(even) {
        background-color: #ddd;
        /* still not working */
    }
    </style>
</head>

<body>

    <h2>Laporan Surat Masuk</h2>

    <p>
        Tanggal di cetak: {{ date('d/m/Y') }}
    </p>

    <table width='1000px'>
        <tr>
            {{-- <th width='3%'>No</th> --}}
            <th width='5%'>No. Agenda</th>
            <th width='10%'>Tanggal Agenda</th>
            <th width='10%'>Tanggal Surat</th>
            <th width='15%'>No. Surat</th>
            <th width='15%'>Asal Surat</th>
            <th width='20%'>Isi Surat</th>
            <th width='5%'>Gol</th>
            <th width='8%'>Diteruskan</th>
            <th width='6%'>TTD</th>
            <th width='6%'>Ket</th>
        </tr>


        @if (!empty($datas))
            @foreach($datas as $data)
                <tr>
                    {{-- <td style="width:3%" >{{ $loop->iteration }}</td> --}}
                    <td >{{ $data->no_agenda }}</td>
                    <td >{{ $data->tanggal_agenda }}</td>
                    <td >{{ $data->tanggal_surat }}</td>
                    <td >{{ $data->no_surat }}</td>
                    <td >{{ $data->asal_surat }}</td>
                    <td class="align-left" >{!! $data->isi_surat !!}</td>
                    <td >{{ $data->golongan }}</td>
                    <td >{{ $data->diteruskan_kepada }}</td>
                    <td >{{ $data->nama_ttd_penerima }}</td>
                    <td >{{ $data->keterangan }}</td>
                </tr>
            @endforeach
        @else
            <h3>Tidak ada data!</h3>
        @endif
    </table>

</body>

</html>
