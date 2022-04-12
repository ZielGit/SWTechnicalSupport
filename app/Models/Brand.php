<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function equipments(){
        return $this->belongsToMany(Equipment::class,  'product_brands');
    }
}
