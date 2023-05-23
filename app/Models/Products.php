<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];
    use HasFactory;

    public function attributes(){
        return $this->hasMany(Products::class, 'id', 'product_id');
    }
}
