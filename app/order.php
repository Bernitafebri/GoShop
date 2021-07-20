<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','jml_harga','status','desc_order'];

    public function order_item(){
        return $this->belongsTo(order_item::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
}
