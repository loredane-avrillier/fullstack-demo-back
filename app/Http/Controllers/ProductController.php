<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Product;


class ProductController extends Controller
{
    public function index() {
        $products = ProductResource::collection(Product::all());
    /*     dd($products);exit; */
        return view('welcome', ['products' => $products]);
    }
  
}
