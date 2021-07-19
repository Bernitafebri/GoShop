<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $fillable = ['transaksi_id','jml_penjualan'];

    public function Transaksi(){
        return $this->belongsTo(transaksi::class);
    }
}
