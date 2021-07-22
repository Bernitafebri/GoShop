<?php

namespace App\Http\Controllers;

use App\laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = laporan::all();
        return view('laporan.index',compact('laporan'));


        //Get tabel Pembelian
        //Get tabel Penjualan
        //Get tabel diskon
        
        //Tampilin semua, tapi harus barang yg sama :)
        //Gimana njir 3 tabel itu submit formnya beda2 :|
        //Gimana biar tahu kalo barangnya sama, padahal 3 tabel itu ngga ada foreign key nya :"
    }    
}
