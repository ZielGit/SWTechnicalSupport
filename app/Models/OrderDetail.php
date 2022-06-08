<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'product_id', 'brand_id', 'service_id','model'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
