<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Incoming;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use PDF;

class IncomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Incoming::latest()->without('isi_surat')->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-info btn-xs" href="' . route('surat-masuk.show', $item->id) . '">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a class="btn btn-warning btn-xs" href="' . route('surat-masuk.edit', $item->id) . '">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="' . route('surat-masuk.destroy', $item->id) . '" class="d-inline"  method="POST" >
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs delete-btn">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    ';
                })->editColumn('tanggal_agenda', function($item) {
                    return date('d-m-Y', strtotime($item->tanggal_agenda));
                })->editColumn('tanggal_surat', function($item) {
                    return date('d-m-Y', strtotime($item->tanggal_surat));
                })->editColumn('isi_surat', function($item){
                    return strip_tags(htmlspecialchars_decode($item->isi_surat));
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.main.surat-masuk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.main.surat-masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_agenda' => 'required',
            'tanggal_agenda' => 'required',
            'tanggal_surat' => 'required',
            'no_surat' => 'required',
            'asal_surat' => 'required',
            'isi_surat' => 'required',
            'golongan' => 'required',
            'diteruskan_kepada' => 'required',
            'nama_ttd_penerima' => 'required',
            'keterangan' => 'required',
            // 'file_surat' => 'mimes:pdf|file',
        ]);

        $validatedData['isi_ringkas'] = Str::limit(strip_tags($request->isi_surat),15);
        // if($request->file('file_surat')){
        //     $validatedData['file_surat'] = $request->file('file_surat')->store('assets/file-surat-masuk');
        // }
        Incoming::create($validatedData);

        return redirect()
                    ->route('surat-masuk.index')
                    ->with('success', 'Sukses! 1 Data Berhasil Disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incoming  $incoming
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Incoming::findOrFail($id);

        return view('pages.main.surat-masuk.show',[
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incoming  $incoming
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Incoming::findOrFail($id);

        return view('pages.main.surat-masuk.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incoming  $incoming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_agenda' => 'required',
            'tanggal_agenda' => 'required',
            'tanggal_surat' => 'required',
            'no_surat' => 'required',
            'asal_surat' => 'required',
            'isi_surat' => 'required',
            'golongan' => 'required',
            'diteruskan_kepada' => 'required',
            'nama_ttd_penerima' => 'required',
            'keterangan' => 'required',
            // 'file_surat' => 'mimes:pdf|file',
        ]);

        $validatedData['isi_ringkas'] = Str::limit(strip_tags($request->isi_surat),15);
        $item = Incoming::findOrFail($id);

        // if($request->file('file_surat')){
        //     Storage::delete($item->file_surat);
        //     $validatedData['file_surat'] = $request->file('file_surat')->store('assets/file-surat-masuk');
        // }

        $item->update($validatedData);
        return redirect()
                    ->route('surat-masuk.index')
                    ->with('success', 'Sukses! 1 Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incoming  $incoming
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Incoming::findorFail($id);
        // if($item->file_surat){
        //     Storage::delete($item->file_surat);
        // }
        $item->delete();
        return redirect()
                    ->route('surat-masuk.index')
                    ->with('success', 'Sukses! 1 Data Berhasil Dihapus');
    }

    public function form_print(){
        return view('pages.main.surat-masuk.form-print');
    }

    public function print_surat(Request $request){
        $tgl_awal = $request->input('mulai_tanggal');
        $tgl_akhir = $request->input('sampai_tanggal');
        $datas = Incoming::whereBetween('created_at',[[$tgl_awal." 00:00:00",$tgl_akhir." 23:59:59"]])->without('file_surat')->get();
        $pdf = PDF::loadView('pages.main.surat-masuk.laporan',compact('datas'));
        $pdf->setPaper('A4','landscape');
        return $pdf->stream('Laporan Surat Masuk '.$tgl_awal .' sampai '.$tgl_akhir.'.pdf', ['Attachment' => 0]);
        // return view('pages.main.surat-masuk.laporan');
    }
}
