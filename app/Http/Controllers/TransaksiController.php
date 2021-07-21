<?php

namespace App\Http\Controllers;
use App\transaksi;
use App\order;
use App\product;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
   
    public function index()
    {
        $transaksis=transaksi::with('order')->get();
        return view ('transaksi.index', compact('transaksis'));
    }

    
    public function create()
    {
        $orders=order::all();
        $products=product::all();
        return view ('transaksi.add', compact('orders','products'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'order_id' => 'required',
            'no_invoice' => 'required',
            'bukti_tf' =>'required|image|mimes:png,jpg,jpeg',
        ]);
        //image upload
        $bukti_tf = $request->file('bukti_tf');
        $buktiName = date('YmdHis').'.'.$bukti_tf->getClientOriginalExtension();
        $destination = storage_path('app/public/buktiTF');
        $bukti_tf->move($destination, $buktiName);

        $transaksi = transaksi::create([
            'order_id'          => $request->order_id,
            'no_invoice'        => $request->no_invoice,
            'bukti_tf'          => $buktiName,
        ]);
        return redirect('/transaksi')->with(['status' => 'Data Berhasil Disimpan!']);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
