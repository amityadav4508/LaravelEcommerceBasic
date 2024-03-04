<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css')}}" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">


    {{-- css style  --}}
    <link rel="stylesheet" href="{{url('assets/style.css')}}">
    <title>eCommerce</title>
  </head>
  <body>
{{-- navbar  --}}
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/">Hidden brand</a>

        <ul class="navbar-nav me-2  mb-lg-0">
          <li class="nav-item">
            <a class="nav-link "  href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"></a>
          </li>
        </ul>
        <form class="d-flex"  role="search" action="/search">
          <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" >
          <button class="btn btn-outline-success  " type="submit">Search</button>
        </form>

{{-- cart ------------- --}}

        <ul class="navbar-nav me-2 me-auto  mb-lg-0">
            <li class="nav-item">
              <a class="nav-link"  href="/cartlist">cart item({{$total}})</a>
            </li>

           @if(Session::has('user'))

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" href="#"  data-bs-toggle="dropdown">
                {{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                
                @else
                <li class="nav-item">
                  <a class="nav-link"  href="/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="/register">Register</a>
                </li>

                @endif
              </ul>

      </div>
    </div>
  </nav>



