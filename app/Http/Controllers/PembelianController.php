<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\storage;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian=Pembelian::all();
        $title="DATA PEMBELIAN";
        return view('admin.berandapembelian',compact('title','pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="INPUT Pembelian";
        return view('admin.inputpembelian',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required'=> 'Kolom :attribute Harus Lengkap',
            'date'=>'Kolom :attribute Harus Tanggal',
            'numeric'=>'Kolom :attribute Harus Angka',
            ];
            $validasi=$request->validate([
                'nama'=>'required',
                'alamat'=>'required',
                'jenis'=>'required'
            ],$message);
            $validasi['user_id']=Auth::id();
            Pembelian::create($validasi);
            return redirect('pembelian')->with('success','Data Berhasil Tersimpan');
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
        
        $pembelian=Pembelian::find($id);
        $title="Edit Pembelian";
        return view('admin.inputpembelian',compact('title','pembelian'));
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
        $message=[
            'required'=> 'Kolom :attribute Harus Lengkap',
            'date'=>'Kolom :attribute Harus Tanggal',
            'numeric'=>'Kolom :attribute Harus Angka',
            ];
            $validasi=$request->validate([
                'nama'=>'required',
                'alamat'=>'required',
                'jenis'=>'required'
            ],$message);
        $validasi['user_id']=Auth::id();
        Pembelian::where('id',$id)->update($validasi);
        return redirect('pembelian')->with('success','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembelian=Pembelian::find($id);
        if($pembelian != null){
            Storage::delete($pembelian->gambar);
            $pembelian=Pembelian::find($pembelian->id);
            Pembelian::where('id',$id)->delete();
        }
        return redirect('pembelian')->with('sucess','Data berhasil terhapus');
    }
}
