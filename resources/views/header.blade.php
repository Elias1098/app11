<?php
use  App\Http\Controllers\CartController;
$total =0;
if(session()->has('user'))
{
    $total= CartController::cartItems();

}
?>
<nav class="navbar navbar-expand-lg navbar-warnning bg-black text-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">My App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/users">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/order">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/phone">Phone</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/products">Products</a>
          </li>
          @if(session()->has('user'))
          
            <li class="nav-item">
            <a class="nav-link" href="/cartDetails">Cart({{$total }})</a>
          </li> 
          @endif

        </ul>
        <form class="d-flex" action="search" >
          @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name ='query'>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        <ul class="navbar-nav navbar-right">
            
            @if (session()->has('user'))
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Session::get('user')['name'] }}                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Setting</a></li>
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>

                </ul>
              </li>


            @else
            <li><a href="/login">login</a></li>|
            <li><a href="/register">Register</a></li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
