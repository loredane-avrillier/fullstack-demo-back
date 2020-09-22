<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::all());
        /*  $products = ProductResource::collection(Product::all());
        return view('welcome', ['products' => $products]); */
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        return new ProductResource($product);
    }
}
