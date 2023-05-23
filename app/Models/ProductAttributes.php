<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributes extends Model
{
    protected $fillable = [
        'product_id',
        'weight',
        'taste',
        'height',
        'length',
    ];
    use HasFactory;

    public function products()
    {
        return $this->belongsTo(Products::class);
    }
}
