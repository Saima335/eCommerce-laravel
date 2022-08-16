@extends('master')
@section("content")
<div class="">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
            @foreach($products as $product)
            <div class="searched-item row cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$product->id}}">
                        <img src="{{$product->gallery}}" class="trending-image" alt="...">
                    </a>
                </div>
                <div class="col-sm-4">
                        <div class="">
                            <h2>{{$product->name}}</h2>
                            <h5>{{$product->description}}</h5>
                        </div>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-warning" href="/removecart/{{$product->cart_id}}"> Remove to Cart</a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
    </div>

</div>
@endsection