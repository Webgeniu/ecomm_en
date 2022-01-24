@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a href="/ordernow" class="btn btn-success">Order Now</a><br><br>
            @foreach ($products as $item)
            <div class="row searhed-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" alt="" class="trending-image">
                    </a>
                </div>
                <div class="col-sm-3">
                    <div>
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                    </div>
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection