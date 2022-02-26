@extends('app')
@section('content')
    <div class="container">
        <div class="card mt-4">
            
            <div class="card-header">    
                  {{$product->name }}
                  <div class="card-tools">
                      <a href="/products">All</a>
                      </div>
            </div>
            <div class="card-body">
                
                    @if (session()->has('success'))
                    <div class="btn btn-success">{{ session('success') }}</div>
                    @endif
                <img src="../{{ $product['gallery'] }}" alt="" style="width: 200px; height:200px">
                {{ $product->discription }}
            </div>
            <div class="card-footer">
                Price ${{ $product->price }}
                <form action="/add_to_cart" >
                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                    <p>
                        <button class="btn btn-primary btn-sm">Add to Cart</button>
                        <button class="btn btn-primary btn-sm">Buy now</button>
                    </p>
                </form>
    
                <p>
                    
                </p>
            </div>
    </div>
    </div>
@endsection