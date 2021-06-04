<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use App\Exports\ExportMakanan;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Auth;

class MakananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $batas = 5;
        $jumlah_makan = Makanan::count();
        $makanan = Makanan::orderBy('id', 'asc')->paginate($batas);
        $no = $batas * ($makanan->currentPage()-1);
        return view('makanan.index', compact('makanan', 'no', 'jumlah_makan'));
    }
    public function create(){
        return view('makanan.create');
    }
    public function store(Request $request){
        $makanan = new Makanan;
        $makanan->id = $request->kode;
        $makanan->nama_barang = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->keterangan = $request->keterangan;
        if($request->hasFile('gambar')){
            $file       = $request->file('gambar');
            $extension   = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $makanan->gambar = $filename;
        }else{
            return $request;
            $makanan->gambar='';
        }
        $makanan->save();
        return redirect('/dashboard')->with('pesan', 'Data berhasil disimpan');
    }
    public function edit($id){
        $makanan = Makanan::find($id);
        return view('makanan.edit', compact('makanan'));
    }
    public function update(Request $request, $id){
        $makanan = Makanan::find($id);
        $makanan->id = $request->kode;
        $makanan->nama_barang = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->keterangan = $request->keterangan;
        if($request->hasFile('gambar')){
            $file       = $request->file('gambar');
            $extension   = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $makanan->gambar = $filename;
        }else{
            return $request;
            $makanan->gambar='';
        }
        $makanan->update();
        return redirect('/dashboard')->with('pesan', 'Data berhasil diupdate');
    }
    public function destroy($id){
        $makanan = Makanan::find($id);
        $makanan->delete();
        return redirect('/dashboard')->with('pesan', 'Data berhasil dihapus');
    }
    public function exportMakanan(){
        return Excel::download(new exportMakanan, 'data_makanan.xlsx');
    }
    public function pdfMakanan(){
        $makanan = Makanan::all();
        return view('makanan.pdfMakanan', compact('makanan'));
    }
}
