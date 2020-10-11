@extends('layouts.myApp')

@section('content')
<div class="container">
    <div class="row text-center">
        @foreach($product as $p)
        <div class="col-md-3">
                <a href="{{ url('product').'/'.$p->id }}"> <img src="{{ $p->image }}" class="img-responsive img-thumbnail" style="width:100%" alt="Image">
            <button type="button" class="btn btn-block" style="background-color:lightgray;">{{ $p->name }}</button>
                </a>
        </div>
@endforeach
    </div>
</div>
@endsection