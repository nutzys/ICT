<?php

namespace App\Http\Controllers;

use App\Models\ProductAttributes;
use App\Models\Products;
use Illuminate\Http\Request;

class AtributeController extends Controller
{
    public function store(Request $request, $id)
    {
        $fields = $request->validate([
            'weight' => 'required',
            'taste' => 'required',
            'height' => 'required',
            'length' => 'required',
        ]);

        ProductAttributes::create([
            'weight' => $fields['weight'],
            'taste' => $fields['taste'],
            'height' => $fields['height'],
            'length' => $fields['length'],
            'product_id' => $id,
        ]);
    }
}
