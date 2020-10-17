@extends('layouts.myApp')

@section('content')
<div class="container">
    <div class="row text-center" align="center">
        <div class="col-md-4">
            <p class="section-title size-18"> اطلاعات خرید </p>
            <i class="gray-color">پر کردن فیلدهای علامت دار ضروری است *</i>
        <div class="item-active mt-2 img-responsive img-thumbnail">
            <img src="{{ asset($product->image) }}" style="width: 100%;">
        </div>
        </div>
        <div class="col-md-8" style="direction: rtl;">
        <form method="post" action="{{ url('postZarin') }}" id="form" class="form-horizontal bg-info p-2">
            @csrf
            <div class="form-group col-md-3">
                <label for="name_user">نام و نام خانوادگی * : </label>
                <input type="text" value="" id="" name="name_user" placeholder="" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="">نام محصول * : </label>
                <input type="text" value="{{ $product->name }}" id="" name="name" placeholder="" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="">تعداد محصول * : </label>
                <input type="text" value="" id="" name="number_product" placeholder="" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="">قیمت محصول * : </label>
                <input type="text" value="{{ $product->price }}" id="" name="price" placeholder="" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="">کد تخفیف : </label>
                <input type="text" value="" id="" name="discount" placeholder="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">جمع کل : </label>
                <input type="text" value="" id="" name="total_price" placeholder="" class="form-control">
            </div>
         <!--   <div class="form-group">
                <input type="hidden" value="{{-- $product->id --}}" id="" name="product_id" placeholder="" class="form-control">
            </div> -->
            <a href="#"> <button type="submit" class="btn btn-danger btn-block"> پرداخت </button></a>
        </form>
        </div>
    </div>
</div>
@endsection