<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['jual_id','beli_id','diskon_id','jml_jual_diskon','laba_rugi'];
}
