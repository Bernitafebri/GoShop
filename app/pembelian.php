<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    protected $table = 'pembelian';
    protected $fillable = ['nama_barang','harga_beli','qty','jml_beli'];
}
