<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use Resources\Views\Auth;

class AddProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cat = category::all();
        $dis = discount::all();
     return view('addProduct',compact('cat','dis'));
    }

    public function store(Request $request)
    {
        $product = new product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->category_id = $request->category_id;
        $product->status = $request->status;
        $product->detail = $request->detail;
        $product->discount = $request->discount;

        $url = 'public/upload/';
        if($request->hasFile('image')){
           $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();

            $request->image->move($url, $imageName);
            $product->image= $url.$imageName;
        }

            if($product->save()){
                return back();
            }

    }

    public function show(Product $product)
    {

    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }
}
