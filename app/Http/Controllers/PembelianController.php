<?php

namespace App\Http\Controllers;

use App\pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = pembelian::all();
        return view('pembelian/index',compact('pembelian'));        
    }

    public function create()
    {
        return view('pembelian.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'nama_barang' => 'required',
            'harga_beli' => 'required',
            'qty' => 'required',
            'jml_beli' => 'required'
        ],
        [
            'nama_barang.required' => 'Anda belum memasukkan nama barang!',
            'harga_beli.required' => 'Anda belum memasukkan harga barang!',
            'qty.required' => 'Anda belum memasukkan jumlah barang!',
            'jml_beli.required' => 'Anda belum memasukkan harga total pembelian!'
        ]);

        $pembelian = pembelian::create([
            'nama_barang'   => $request->nama_barang,
            'harga_beli'    => $request->harga_beli,
            'qty'           => $request->qty,
            'jml_beli'      => $request->jml_beli
        ]);

        if($pembelian){
            //Berhasil
            return redirect()->route('pembelian.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //Gagal
            return redirect()->route('pembelian.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

    }

    public function show($id)
    {
        //
    }


    public function edit(pembelian $pembelian)
    {
        return view('pembelian.edit',compact('pembelian'));
    }

    public function update(Request $request, pembelian $pembelian)
    {
        $this->validate($request,
        [
            'nama_barang' => 'required',
            'harga_beli' => 'required',
            'qty' => 'required',
            'jml_beli' => 'required'
        ]);

        $pembelian->update([
            'nama_barang'   => $request->nama_barang,
            'harga_beli'    => $request->harga_beli,
            'qty'           => $request->qty,
            'jml_beli'      => $request->jml_beli
        ]);

        if($pembelian){
            //Berhasil
            return redirect()->route('pembelian.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //Gagal
            return redirect()->route('pembelian.index')->with(['error' => 'Data Gagal Disimpan!']);
        };
    }

    public function destroy($id)
    {
        $pembelian = pembelian::findOrFail($id);
        $pembelian->delete();
        return redirect()->route('pembelian.index');
    }
}
