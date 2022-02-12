@extends('app')
@section('content')

<div class="container">
   <div>
       <h1>Update</h1>

   </div>
<form action="/update" method="post">
    @csrf
<div class="form-group">
    <input type="hidden" value="{{ $user->id }}" name ='id'>
  <label for="">Name</label>
  <input type="text" name="name" id="" class="form-control"
  placeholder=""
value="{{ $user->name }}"

  >
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" id="" class="form-control"
    placeholder=""
    value="{{ $user->email}}"
    >
  </div>

  <div class="form-group">
    <label for="">Password</label>
    <input type="text" name="password" id="" class="form-control"
    placeholder=""
    value="{{ $user->password}}"
    >
  </div>
  <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Update">

  </div>
</form>
</div>

@endsection
