@extends('layouts.main')
@section('main-container')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="detail-img" src="{{$product['gallery']}}" >

        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h5>Price : {{$product['price']}}</h5>
            <h5>Details: {{$product['description']}} </h5>
            <h5>Category : {{$product['category']}}</h5>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-primary">Add to Cart</button>
            </form>


            
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
         
        </div>
      
    </div>
</div>

@endsection