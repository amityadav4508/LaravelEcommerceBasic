@extends('layouts.main')
@section('main-container')
<div class="container custom-product ">

<div class="col-sm-10">

    <div class="trending-wrapper mt-5  detail-img">
        <h3>my orders</h3>
        <a class="btn btn-success" href="ordernow">Order Now</a> <br><br>

        <div class="row justify-content-evenly mt-3">
      
          @foreach ($orders as $item )
          <div class="row cart-list-devider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
                   
                   </a>
            </div>
            <div class="col-sm-3">
                
                    <div class="">
                    <h3>Name : {{$item->name}}</h3>
                    <h5>Delivery Status : {{$item->status}}</h5>
                    <h5>Address : {{$item->address}}</h5>
                    <h5>Payment Status : {{$item->payment_status}}</h5>
                    <h5>Payment Method : {{$item->payment_method}}</h5>
                    </div>
                   </a>
                
            </div>
          
          </div>
        
           @endforeach
        </div>
      
</div>
 </div>

</div>
@endsection