@extends('app')
@section('content')
    <div class="container">

        @foreach ($products as $product )
            <div class="card mt-4">
                <div class="card-header">
                    {{ $product->name }}
                </div>
                <div class="card-body">
                    <a href="detail/{{$product['id'] }}">
                    <img src="{{ $product['gallery'] }}" alt="" style="width: 200px; height:200px">
                    </a>
                    {{ $product->discription }}
                </div>
                <div class="card-footer">
                    Price ${{ $product->price }}
                </div>
            </div>
        @endforeach
    </div>
@endsection