@extends('app')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-title">

            </div>
            <div class="card-body">
                <table class="table table-striped table-inverse table-responsive table-sm">
               
                        <tbody>
                            <tr>
                                <th>Amount</th>
                                <th>$ {{ $total }}</th>
                            </tr>
                            <tr>
                                <th>Tax</th>
                                <th>$ {{ 0 }}</th>
                            </tr>
                            <tr>
                                <th>Delivery</th>
                                <th>$ {{ 0 }}</th>
                            </tr>
                            <tr>
                                <th>Total Amount</th>
                                <th>$ {{ $total +10 }}</th>
                            </tr>
                        </tbody>
                </table>
                <form action="/orderplace" method="POST">
                    @csrf
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your address" name="address"></textarea>
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment1" value="Tele Birr">
                            <label class="form-check-label" for="payment1">
                            Tele Birr
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment1" value="CBE">
                            <label class="form-check-label" for="payment1">
                              CBE
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment1" value="Online">
                            <label class="form-check-label" for="payment1">
                              Online
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment1" value="Cash go">
                            <label class="form-check-label" for="payment1">
                             Cash go
                            </label>
                          </div>
                      </div>
                      <div class="form-group">
                          <input type="submit" class="btn btn-primary btn-sm" value="Order now">
                      </div>
                </form>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
@endsection