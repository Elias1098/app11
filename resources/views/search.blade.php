@extends('app')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                Search result
            </div>
            <div class="card-body">
                @forelse ($products as $product)
                    <p>
                        <a href="detail/{{$product['id'] }}">

                            <img src="{{ $product['gallery'] }}" alt="" style="width: 200px; height:200px">
                            <div>
                                <h3>
                                    {{ $product['name'] }}
                                </h3>
                            </div>
                        </a>
                    </p>
                @empty
                    <p>No result found</p>
                @endforelse
            </div>
         </div>
    </div>
@endsection