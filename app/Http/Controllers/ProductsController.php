<?php

namespace App\Http\Controllers;

use App\Models\ProductAttributes;
use App\Models\Products;
use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Exceptions\NotFound;

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
        $product = Products::find($id);

        if(!$product){
            return response()->json(['error' => 'Record not found'], 404);
        }
        return response([
            'product' => $product,
            'attributes' => ProductAttributes::where('product_id', '=', $id)->get(),
        ]);
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
