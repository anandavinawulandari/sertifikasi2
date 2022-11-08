<?php

namespace App\Http\Controllers;
use App\Models\Arsip;
use Datatables;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index(){
        $data = Arsip::all();
        return view('arsip.index', ['dataArsip' => $data]);
   
    }

    public function create(){
        return view('arsip.create');
    }
    public function store(Request $request){
       
        $data = new Arsip;
       
        $data->nomorsurat = $request->nomorsurat;
        $data->kategori = $request->kategori;
        $data->judul = $request->judul;
        $data->dokumen = $request->dokumen;
        $data->save();
        return redirect('/arsip')->with('sucess','Data Berhasil Tersimpan');
    }
       public function destroy($id)
    {
        $data = Arsip::find($id);
        $data->delete();
        return redirect('/arsip');
    }

    public function kop2($id){
        $data['data'] = Arsip::find($id)->get()->first();
         return view('arsip.kop2')->with($data);
     }
    public function lihatfile($id){
        $data['data'] = Arsip::find($id)->get()->first();
         return view('arsip.lihatfile')->with($data);
     }

     public function cetak($id){
        $data['data'] = Arsip::find($id)->get()->first();
         return view('arsip.cetak')->with($data);
     }
     public function lihat($id){
        $data['data'] = Arsip::find($id)->get()->first();
         return view('arsip.lihat')->with($data);
     }

     public function lihatabout(){
        $data['data'] = Arsip::all();
        return view('arsip.lihatabout')->with($data);
   
    }

    public function edit($id)
    {
        $data = Arsip::find($id);
        return view('arsip.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Arsip::find($id);
        $data->id = $request->id;
        $data->nomorsurat = $request->nomorsurat;
        $data->kategori = $request->kategori;
        $data->judul = $request->judul;
        $data->dokumen = $request->dokumen;
        $data->update();
        return redirect('/arsip')->with('success','Data berhasil diubah');
    }
}
