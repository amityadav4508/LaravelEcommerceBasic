@extends('layouts.main')
@section('main-container')
<div class="container custom-product ">
<div class="col-sm-4">
    <a href="">filter</a>

</div>
<div class="col-sm-">

    <div class="trending-wrapper mt-5  detail-img">
        <h3>Result for Products</h3>
        <div class="row justify-content-evenly mt-3">
      
          @foreach ($products as $item )
          <div class="col-sm searched-item">
            <a href="detail/{{$item['id']}}">
           <img class="trending-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
           <div class="">
           <h3>{{$item['name']}}</h3>
           <h5>{{$item['description']}}</h5>
           </div>
          </a>
           </div>
           @endforeach
         </div>
</div>
 </div>

</div>
@endsection