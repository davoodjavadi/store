<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use App\Lib\SoapClient;
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
      $cat = $product->category()->first();
      return view('product',compact('product','cat'));
    }

    public function buyForm(Request $request,$id){
        $product = Product::find($id);
        return view('buy',compact('product'));
    }

    Public function postZarin(Request $request){

        $order = new SoapClient();
        $res = $order->pay($request->price,"javadi.davood@gmail.com","09123456789");
        return redirect('https://www.sendbox.zarinpal.com/pg/StartPay/' . $res);
           }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }
}
