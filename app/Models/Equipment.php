<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'brand_id'
    ];

    public function brands(){
        return $this->belongsToMany(Brand::class, 'equipment_brands');
    }
}
