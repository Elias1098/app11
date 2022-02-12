@extends('app')
@section('content')
<div class="container">
    <h1>This is my home page</h1>
    @if (session()->has('user'))
    <p>{{ Session::get('user')['id'] }}</p>
    @endif
</div>

@endsection
