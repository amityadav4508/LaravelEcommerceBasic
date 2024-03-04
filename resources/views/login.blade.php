@extends('layouts.main')
@section('main-container')

<div class="container custom-login">
    <div class="row">

        <div class="col-sm-4 m-auto">
            <form action="login" method="POST">
              @csrf
              
              
              <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="Email1">
               

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="InputPassword1">
                </div>

                <button type="submit" class="btn btn-primary ">login</button>
              </form>

        </div>
    </div>
</div>

@endsection
