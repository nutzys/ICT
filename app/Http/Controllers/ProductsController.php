<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return Products::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        return Products::create($request->all());
    }

    public function show($id)
    {
        return Products::find($id);
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id)
    {
        $product = Products::find($id);
        return $product->delete();
    }

}
