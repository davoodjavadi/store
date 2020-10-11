<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index()
    {
        $product = product::all();
     return view('index',compact('product'));
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
      $product = Product::find($id);
      return view('product',compact('product'));
    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }
}
