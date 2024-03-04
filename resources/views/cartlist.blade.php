@extends('layouts.main')
@section('main-container')
<div class="container custom-product ">

<div class="col-sm-10">

    <div class="trending-wrapper mt-5  detail-img">
        <h3>Cart list</h3>
        <a class="btn btn-success" href="ordernow">Order Now</a> <br><br>

        <div class="row justify-content-evenly mt-3">
      
          @foreach ($products as $item )
          <div class="row cart-list-devider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
                   
                   </a>
            </div>
            <div class="col-sm-3">
                
                    <div class="">
                    <h5>{{$item->name}}</h5>
                    <p>{{$item->description}}</p>
                    </div>
                   </a>
                
            </div>
            <div class="col-sm-3">
                <a class="btn btn-warning" href="/removecart/{{$item->cart_id}}">Remove to Cart</a>
            </div>
          </div>
        
           @endforeach
         
        </div>
        <a class="btn btn-success" href="ordernow">Order Now</a> <br><br>
</div>
 </div>

</div>
@endsection