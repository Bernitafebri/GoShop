<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    
    protected $fillable = ['product_id', 'quantity'];

    public function product(){
        return $this->belongsTo(product::class);
    }
}
