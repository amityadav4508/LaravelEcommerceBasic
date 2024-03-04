@extends('layouts.main')
@section('main-container')
<div class="container custom-product ">

<div class="col-sm-10">

    <table class="table">
       
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Amount</td>
            <td>${{$total}}</td>
        
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>Tax</td>
            <td>0</td>
           
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>Delivery</td>
            <td>$10</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td >Total Amount</td>
            <td>${{$total+10}}</td>
          </tr>

        </tbody>
      </table>
      <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="mb-3">
             
         <textarea name="address"  type="email" class="form-control" placeholder="enter your address" ></textarea>
             
            </div>
            <div class="mb-3">
              <label for="pwd">Payment Method</label> <br> 
             <input type="radio" value="cash" name="payment"><span>online payment</span> <br> 
             <input type="radio" value="cash" name="payment"><span>EMI payment</span> <br> 
             <input type="radio" value="cash" name="payment"><span> Payment on Delivery</span> <br> 
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

   
</div>
</div>
@endsection