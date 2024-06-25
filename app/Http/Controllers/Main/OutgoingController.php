<?php

namespace App\Http\Controllers\Main;

use App\Models\Outgoing;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PDF;

class OutgoingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Outgoing::latest()->without('isi_surat')->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-info btn-xs" href="' . route('surat-keluar.show', $item->id) . '">
                            <i class="fa fa-search-plus"></i>
                        </a>
                        <a class="btn btn-warning btn-xs" href="' . route('surat-keluar.edit', $item->id) . '">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="' . route('surat-keluar.destroy', $item->id) . '" class="d-inline" method="POST" >
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs delete-btn" >
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
        return view('pages.main.surat-keluar.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.main.surat-keluar.create');
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
            'isi_surat' => 'required',
            'golongan' => 'required',
            'keterangan' => 'required',
            'file_surat' => 'mimes:pdf|file',
        ]);
        $validatedData['isi_ringkas'] = Str::limit(strip_tags($request->isi_surat),15);
        if($request->file('file_surat')){
            $validatedData['file_surat'] = $request->file('file_surat')->store('assets/file-surat-keluar');
        }

        Outgoing::create($validatedData);

        return redirect()
                    ->route('surat-keluar.index')
                    ->with('success', 'Sukses! 1 Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outgoing  $outgoing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Outgoing::findOrFail($id);

        return view('pages.main.surat-keluar.show',[
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outgoing  $outgoing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Outgoing::findOrFail($id);

        return view('pages.main.surat-keluar.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outgoing  $outgoing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_agenda' => 'required',
            'tanggal_agenda' => 'required',
            'tanggal_surat' => 'required',
            'no_surat' => 'required',
            'isi_surat' => 'required',
            'golongan' => 'required',
            'keterangan' => 'required',
            'file_surat' => 'mimes:pdf|file',
        ]);

        $validatedData['isi_ringkas'] = Str::limit(strip_tags($request->isi_surat),15);
        $item = Outgoing::findOrFail($id);

        if($request->file('file_surat')){
            Storage::delete($item->file_surat);
            $validatedData['file_surat'] = $request->file('file_surat')->store('assets/file-surat-keluar');
        }

        $item->update($validatedData);
        return redirect()
                    ->route('surat-keluar.index')
                    ->with('success', 'Sukses! 1 Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outgoing  $outgoing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Outgoing::findorFail($id);

        if($item->file_surat){
            Storage::delete($item->file_surat);
        }
        $item->delete();
        return redirect()
                    ->route('surat-keluar.index')
                    ->with('success', 'Sukses! 1 Data Berhasil Dihapus');
    }

    public function download_surat($id)
    {
        $item = Outgoing::findOrFail($id);
        return Storage::download($item->file_surat);
    }

    public function form_print(){
        return view('pages.main.surat-keluar.form-print');
    }

    public function print_surat(Request $request){
        $tgl_awal = $request->input('mulai_tanggal');
        $tgl_akhir = $request->input('sampai_tanggal');
        $datas = Outgoing::whereBetween('created_at',[[$tgl_awal." 00:00:00",$tgl_akhir." 23:59:59"]])->without('file_surat')->get();
        $pdf = PDF::loadView('pages.main.surat-keluar.laporan',compact('datas'));
        $pdf->setPaper('F4','landscape');
        return $pdf->stream('Laporan Surat Keluar '.$tgl_awal .' sampai '.$tgl_akhir.'.pdf', ['Attachment' => 0]);
    }
}
