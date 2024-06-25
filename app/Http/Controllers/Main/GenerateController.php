<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Carbon;

class GenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.main.generate-surat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        switch($id){
            case 'sk':
                return view('pages.main.generate-surat.create-sk');
                break;
            case 'sp':
                return view('pages.main.generate-surat.create-sp');
                break;
            case 'st':
                return view('pages.main.generate-surat.create-st');
                break;
            case 'sppd':
                return view('pages.main.generate-surat.create-sppd');
                break;
            case 'lk':
                return view('pages.main.generate-surat.create-lk');
                break;
            default:
            return view('pages.main.generate-surat.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function form($id){
        switch($id){
            case 'sk':
                return view('pages.main.generate-surat.surat-keterangan.form');
                break;
            case 'sp':
                return view('pages.main.generate-surat.surat-panggilan.form');
                break;
            case 'st':
                return view('pages.main.generate-surat.surat-tugas.form');
                break;
            case 'sppd':
                return view('pages.main.generate-surat.surat-sppd.form');
                break;
            case 'lk':
                return view('pages.main.generate-surat.laporan-kegiatan.form');
                break;
            case 'sd':
                return view('pages.main.generate-surat.surat-dispensasi.form');
                break;
            case 'sr':
                return view('pages.main.generate-surat.surat-rekomendasi.form');
                break;
            case 'ld':
                return view('pages.main.generate-surat.lembar-disposisi.form');
                break;
            default:
            return view('pages.main.generate-surat.index');
        }
    }

    public function surat_keterangan(Request $request){

        // Set lokalitas (locale) ke bahasa Indonesia
        Carbon::setLocale('id');
        app()->setLocale('id');

        $tanggalSekarang = Carbon::now();

        // Mendapatkan tanggal, hari, bulan, dan tahun
        $tanggal = $tanggalSekarang->format('d'); // Tanggal (01 - 31)
        $bulan = $tanggalSekarang->format('F');  // Bulan (Januari, Februari, dst.)
        $tahun = $tanggalSekarang->format('Y');  // Tahun (2023)

        $date_time= $tanggalSekarang->toDateTimeString();
        $date_indo = $tanggal.' '.trans('bulan.'.$bulan).' '.$tahun;
        $datas = $request->validate([
            'no_surat' => 'required',
            'kepsek' => 'required',
            'nip' => 'required',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'nis/nisn' => 'required',
            'tahun_pelajaran' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'npsn' => 'required',
            'keterangan' => 'required',
            'keperluan' => 'required'
        ]);

        $data = [
            'no_surat' => $datas['no_surat'],
            'kepsek' => $datas['kepsek'],
            'nip' => $datas['nip'],
            'nama_siswa' => $datas['nama_siswa'],
            'kelas' => $datas['kelas'],
            'nis/nisn' => $datas['nis/nisn'],
            'tahun_pelajaran' => $datas['tahun_pelajaran'],
            'ttl' => $datas['ttl'],
            'alamat' => $datas['alamat'],
            'npsn' => $datas['npsn'],
            'keterangan' => $datas['keterangan'],
            'keperluan' => $datas['keperluan']

        ];

        $pdf = PDF::loadView('pages.main.generate-surat.surat-keterangan.template',compact('data','date_indo'));
        // if ($datas ['keterangan'] == 'lulus'){
        //     $pdf = PDF::loadView('pages.main.generate-surat.surat-keterangan.template-lulus',compact('data','date_indo'));
        // } else {
        //     $pdf = PDF::loadView('pages.main.generate-surat.surat-keterangan.template-ujian',compact('data','date_indo'));
        // }
        $pdf->setPaper('A4');
        return $pdf->stream('Surat Keterangan '.$request->input('nama_siswa').'.pdf', ['Attachment' => 0]);
    }

    public function surat_panggilan(Request $request){

        // Set lokalitas (locale) ke bahasa Indonesia
        Carbon::setLocale('id');
        app()->setLocale('id');

        $tanggalSekarang = Carbon::now();

        // Mendapatkan tanggal, hari, bulan, dan tahun
        $tanggal = $tanggalSekarang->format('d'); // Tanggal (01 - 31)
        $bulan = $tanggalSekarang->format('F');  // Bulan (Januari, Februari, dst.)
        $tahun = $tanggalSekarang->format('Y');  // Tahun (2023)

        $date_time= $tanggalSekarang->toDateTimeString();
        $date_indo = $tanggal.' '.trans('bulan.'.$bulan).' '.$tahun;
        $datas = $request->validate([
            'no_surat' => 'required',
            'hal' => 'required',
            'kepsek' => 'required',
            'nip' => 'required',
            'nama_siswa' => 'required',
            'nama_ortu' => 'required',
            'kelas' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'alamat' => 'required',
            'keperluan' => 'required',
            'nama_guru' => 'required',
            'jabatan' => 'required',
        ]);

        if (count($datas['nama_guru']) === count($datas['jabatan'])) {
            for ($i = 0; $i < count($datas['nama_guru']); $i++) {
                $items[] = [
                    'nama' => $datas['nama_guru'][$i],
                    'jabatan' => $datas['jabatan'][$i],
                ];
            }
        } else {
            echo "Panjang array tidak sama, tidak dapat memasangkan data.";
        }

        $pdf = PDF::loadView('pages.main.generate-surat.surat-panggilan.template',compact('datas','date_indo','items'));
        $pdf->setPaper('A4');
        return $pdf->stream('Surat Panggilan '.$request->input('nama_siswa').'.pdf', ['Attachment' => 0]);
    }

    public function surat_dispensasi(Request $request){

        // Set lokalitas (locale) ke bahasa Indonesia
        Carbon::setLocale('id');
        app()->setLocale('id');

        $tanggalSekarang = Carbon::now();

        // Mendapatkan tanggal, hari, bulan, dan tahun
        $tanggal = $tanggalSekarang->format('d'); // Tanggal (01 - 31)
        $bulan = $tanggalSekarang->format('F');  // Bulan (Januari, Februari, dst.)
        $tahun = $tanggalSekarang->format('Y');  // Tahun (2023)

        $date_time= $tanggalSekarang->toDateTimeString();
        $date_indo = $tanggal.' '.trans('bulan.'.$bulan).' '.$tahun;

        $datas = $request->validate([
            'no_surat' => 'required',
            'kepsek' => 'required',
            'nip' => 'required',
            'keperluan' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'nis' => 'required',
            'keterangan' => 'required',
        ]);


        if (count($datas['nama_siswa']) === count($datas['kelas'])) {
            for ($i = 0; $i < count($datas['nama_siswa']); $i++) {
                $items[] = [
                    'name' => $datas['nama_siswa'][$i],
                    'class' => $datas['kelas'][$i],
                    'nis' => $datas['nis'][$i],
                    'keterangan' => $datas['keterangan'][$i],
                ];
            }
        } else {
            echo "Panjang array tidak sama, tidak dapat memasangkan data.";
        }

        $hitung = count($datas['nama_siswa']);
        $setengahJumlah = ceil($hitung/2);
        // dd($hitung);
        // dd($datas);
        $pdf = PDF::loadView('pages.main.generate-surat.surat-dispensasi.template-1-kolom',compact('datas','date_indo','items','hitung'));
        $pdf->setPaper('A4');
        return $pdf->stream('Surat Dispensasi '.$request->input('keperluan').'.pdf', ['Attachment' => 0]);
    }

    public function laporan_kegiatan(Request $request){

        // Set lokalitas (locale) ke bahasa Indonesia
        Carbon::setLocale('id');
        app()->setLocale('id');

        $tanggalSekarang = Carbon::now();

        // Mendapatkan tanggal, hari, bulan, dan tahun
        $tanggal = $tanggalSekarang->format('d'); // Tanggal (01 - 31)
        $bulan = $tanggalSekarang->format('F');  // Bulan (Januari, Februari, dst.)
        $tahun = $tanggalSekarang->format('Y');  // Tahun (2023)

        $date_time= $tanggalSekarang->toDateTimeString();
        $date_indo = $tanggal.' '.trans('bulan.'.$bulan).' '.$tahun;
        $datas = $request->validate([
            'no_surat' => 'required',
            'kepsek' => 'required',
            'nip_kepsek' => 'required',
            'nama_guru' => 'required',
            'nip_guru' => 'required',
            'hari' => 'required',
            'tempat' => 'required',
            'kegiatan' => 'required'
        ]);

        // return view('pages.main.generate-surat.surat-keterangan.template',compact('data','date_text'));
        $pdf = PDF::loadView('pages.main.generate-surat.laporan-kegiatan.template',compact('datas','date_indo'));
        $pdf->setPaper('A4');
        return $pdf->stream('Laporan Kegiatan '.$request->input('nama_guru').'.pdf', ['Attachment' => 0]);
    }

    public function surat_tugas(Request $request){

        // Set lokalitas (locale) ke bahasa Indonesia
        Carbon::setLocale('id');
        app()->setLocale('id');

        $tanggalSekarang = Carbon::now();

        // Mendapatkan tanggal, hari, bulan, dan tahun
        $tanggal = $tanggalSekarang->format('d'); // Tanggal (01 - 31)
        $bulan = $tanggalSekarang->format('F');  // Bulan (Januari, Februari, dst.)
        $tahun = $tanggalSekarang->format('Y');  // Tahun (2023)

        $date_time= $tanggalSekarang->toDateTimeString();
        $date_indo = $tanggal.' '.trans('bulan.'.$bulan).' '.$tahun;

        $datas = $request->validate([
            'no_surat' => 'required',
            'kepsek' => 'required',
            'nip' => 'required',
            'dasar' => 'required',
            'keperluan' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'nama_staff' => 'required',
            'nip_staff' => 'required',
            'jabatan' => 'required',
        ]);


        if (count($datas['nama_staff']) === count($datas['nip_staff']) && count($datas['nama_staff']) === count($datas['jabatan'])) {
            for ($i = 0; $i < count($datas['nama_staff']); $i++) {
                $items[] = [
                    'nama' => $datas['nama_staff'][$i],
                    'nip_staff' => $datas['nip_staff'][$i],
                    'jabatan' => $datas['jabatan'][$i],
                ];
            }
        } else {
            echo "Panjang array tidak sama, tidak dapat memasangkan data.";
        }

        $hitung = count($datas['nama_staff']);
        // dd($items);
        $pdf = PDF::loadView('pages.main.generate-surat.surat-tugas.template',compact('datas','date_indo','items','hitung'));
        $pdf->setPaper('A4');
        return $pdf->stream('Surat Tugas '.$request->input('keperluan').'.pdf', ['Attachment' => 0]);
    }

    public function surat_sppd(Request $request){

        // Set lokalitas (locale) ke bahasa Indonesia
        Carbon::setLocale('id');
        app()->setLocale('id');

        $tanggalSekarang = Carbon::now();

        // Mendapatkan tanggal, hari, bulan, dan tahun
        $tanggal = $tanggalSekarang->format('d'); // Tanggal (01 - 31)
        $bulan = $tanggalSekarang->format('F');  // Bulan (Januari, Februari, dst.)
        $tahun = $tanggalSekarang->format('Y');  // Tahun (2023)

        $date_time= $tanggalSekarang->toDateTimeString();
        $date_indo = $tanggal.' '.trans('bulan.'.$bulan).' '.$tahun;
        $datas = $request->validate([
            'no_surat' => 'required',
            'kepsek' => 'required',
            'nip_kepsek' => 'required',
            'nama_pegawai' => 'required',
            'pangkat' => 'required',
            'jabatan' => 'required',
            'tingkat' => 'required',
            'maksud' => 'required',
            'angkutan' => 'required',
            'keberangkatan' => 'required',
            'tujuan' => 'required',
            'lama_perjalanan' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_kembali' => 'required',
            'pengikut' => 'max:250',
            'keterangan' => 'required',
        ]);
        // dd($datas['pengikut']);

        if ($datas['pengikut'][0] != null) {
            $items [] = [
                $datas['nama_pegawai']
            ];
            for ($i = 0; $i < count($datas['pengikut']); $i++) {
                $items [] = [
                    $datas['pengikut'][$i]
                ];
            }
        } else {
            $items [] = $datas['nama_pegawai'];
        }
        // dd($items);
        $pdf = PDF::loadView('pages.main.generate-surat.surat-sppd.template',compact('datas','date_indo','items'));
        $pdf->setPaper('A4');
        return $pdf->stream('Surat Perintah Perjalanan Dinas '.$request->input('nama_pegawai').'.pdf', ['Attachment' => 0]);
    }

    public function surat_rekomendasi(Request $request){

        // Set lokalitas (locale) ke bahasa Indonesia
        Carbon::setLocale('id');
        app()->setLocale('id');

        $tanggalSekarang = Carbon::now();

        // Mendapatkan tanggal, hari, bulan, dan tahun
        $tanggal = $tanggalSekarang->format('d'); // Tanggal (01 - 31)
        $bulan = $tanggalSekarang->format('F');  // Bulan (Januari, Februari, dst.)
        $tahun = $tanggalSekarang->format('Y');  // Tahun (2023)

        $date_time= $tanggalSekarang->toDateTimeString();
        $date_indo = $tanggal.' '.trans('bulan.'.$bulan).' '.$tahun;

        $datas = $request->validate([
            'no_surat' => 'required',
            'kepsek' => 'required',
            'nip' => 'required',
            'keperluan' => 'required',
            'tahun_ajaran' => 'required',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'nis' => 'required',
            'keterangan' => 'required',
        ]);


        if (count($datas['nama_siswa']) === count($datas['kelas'])) {
            for ($i = 0; $i < count($datas['nama_siswa']); $i++) {
                $items[] = [
                    'name' => $datas['nama_siswa'][$i],
                    'class' => $datas['kelas'][$i],
                    'nis' => $datas['nis'][$i],
                    'keterangan' => $datas['keterangan'][$i],
                ];
            }
        } else {
            echo "Panjang array tidak sama, tidak dapat memasangkan data.";
        }
        $hitung = count($datas['nama_siswa']);
        $setengahJumlah = ceil($hitung/2);
        // dd($hitung);

        // dd($datas);

        if ($hitung == 1){
            $pdf = PDF::loadView('pages.main.generate-surat.surat-rekomendasi.template-tanpa-kolom',compact('datas','date_indo','items','setengahJumlah'));
        } else {
            $pdf = PDF::loadView('pages.main.generate-surat.surat-rekomendasi.template-1-kolom',compact('datas','date_indo','items','hitung'));
        }
        $pdf->setPaper('A4');
        return $pdf->stream('Surat Rekomendasi '.$request->input('keperluan').'.pdf', ['Attachment' => 0]);
    }

    public function lembar_disposisi(Request $request){

        // Set lokalitas (locale) ke bahasa Indonesia
        Carbon::setLocale('id');
        app()->setLocale('id');

        $tanggalSekarang = Carbon::now();

        // Mendapatkan tanggal, hari, bulan, dan tahun
        $tanggal = $tanggalSekarang->format('d'); // Tanggal (01 - 31)
        $bulan = $tanggalSekarang->format('F');  // Bulan (Januari, Februari, dst.)
        $tahun = $tanggalSekarang->format('Y');  // Tahun (2023)

        $date_time= $tanggalSekarang->toDateTimeString();
        $date_indo = $tanggal.' '.trans('bulan.'.$bulan).' '.$tahun;
        $datas = $request->validate([
            'kepsek' => 'required',
            'nip' => 'required',
            'no_agenda' => 'required',
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'tgl_diterima' => 'required',
            'asal_surat' => 'required',
            'isi_surat' => 'required',
            'golongan' => 'required',
        ]);

        $pdf = PDF::loadView('pages.main.generate-surat.lembar-disposisi.template',compact('datas','date_indo'));
        $pdf->setPaper('legal');
        return $pdf->stream('Lembar Disposisi '.$request->input('isi_surat').'.pdf', ['Attachment' => 0]);
    }
}
