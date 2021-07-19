<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['order_id','no_invoice','bukti_tf'];

    public function Order(){
        return $this->belongsTo(order::class);
    }
    
}
