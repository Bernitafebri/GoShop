<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = ['jual_id','beli_id','diskon_id','jml_jual_diskon','laba_rugi'];
}
