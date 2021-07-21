<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    
    protected $fillable = ['user_id', 'product_id', 'quantity', 'jml_harga','status','desc_order'];

    public function product(){
        return $this->belongsTo(product::class);
    }


    public function user(){
        return $this->belongsTo(user::class);
    }
}
