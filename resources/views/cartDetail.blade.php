@extends('app')
@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Car Items List
            <div class="card-tools">
                <a href="/ordernow" class="btn btn-success btn-sm">Order now</a>
            </div>
        </div>
        <div class="card-body">
                          
            @forelse ($products as $product)
            <p>
                <img src="{{ $product->gallery}}" alt="" class="trending-image" style="width:200px; height:200px">
                {{ $product->discription }}
                <p><a href="/removecart/{{ $product->cart_id }}" class="btn btn-danger btn-sm">Remote to cart</a></p>

            </p>
            @empty
         <p>No item in the cart</p>
            @endforelse
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
    
@endsection