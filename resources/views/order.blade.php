@extends('app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                My orders
            </div>
            <div class="card-body">
          
                  <table class="table table-striped table-inverse table-responsive table-sm">
               <thead>
                   <tr>
                       <th>No</th>
                       <th>Name</th>
                       <th>Price</th>
                       <th>Payment status</th>
                       <th>Payment method</th>
                       <th>Address</th>

                   </tr>
               </thead>
                    <tbody>
                        @forelse ($orders as $order)

                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $order->name}}</td>
                            <td>{{ $order->price}}</td>
                            <td>{{ $order->payment_status}}</td>
                            <td>{{ $order->payment_method}}</td>
                            <td>{{ $order->address}}</td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="6"></td>
                        </tr>
                        @endforelse
                    </tbody>
            </table>
                
                    
               
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
@endsection