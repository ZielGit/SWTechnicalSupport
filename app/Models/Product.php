<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'brand_id'
    ];

    public function brands(){
        return $this->belongsToMany(Brand::class, 'product_brands');
    }

    public function services(){
        return $this->belongsToMany(Service::class, 'product_services');
    }
}
