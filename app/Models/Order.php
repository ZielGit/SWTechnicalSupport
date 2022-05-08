<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','customer_id','type_service','place','schedule','cost_service','total_amount','advance','subtraction','problems','solutions','observations','accessories','status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
