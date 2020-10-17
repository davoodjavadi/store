@extends('layouts.myApp')

@section('content')
<div class="container">
    <h5 align="center" class="text-primary">جزئیات محصول</h5>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 text-right">
            <div>
                <span>نام محصول :
                <h2>{{ $product->name }}</h2>
                </span>
            </div>
            <div>
                <p> دسته محصول :
                <span class="size-20">{{ $cat->name }}</span>
                </p>
            </div>
            <div>
                <p> تخفیف :
                    <span class="size-20">{{ $product->discount }}</span>
                </p>
            </div>
            <div>
                <p> توضیح محصول :
                    <span class="size-20">{{ $product->detail }}</span>
                </p>
            </div>
            <div>
                <p>قیمت :
                    <span class="size-20"> {{ $product->price }} </span>
                </p>
            </div>
            <a href="{{ url('buy').'/'.$product->id }}"><button type="submit" class="btn btn-danger">خرید</button></a>
        </div>
        <div class="col-md-4">
            <img src="{{ asset($product->image) }}" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection