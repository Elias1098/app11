@extends('app')
@section('content')
    <div>
        <form action="flight" method="post">
        @csrf
        <div class="form-control">
            <input type="text" class="form-control" name ="destination">
        </div>
        <div class="form-control">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
        </form>
    </div>
@endsection