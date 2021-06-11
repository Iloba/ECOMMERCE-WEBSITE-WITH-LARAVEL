@extends('layouts.app')
@section('content')
  <div class="container mt-5 login-bg">
        <div class="row justify-content-center">
          
                <div class="col-md-8">
                    <div class="d-flex">
                        <div class="img-box m-5">
                            <h1 class="bolder">Welcome back,</h1>
                            <h4 class="bold">Kindly fill in details to log in</h4>
                            <img src="{{asset('img/relax.svg')}}" class="img-fluid relax" alt="">
                        </div>
                        <div class="form-box mt-5 p-3">
                            <form action="">
                                 <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="float-right clearfix">
                                    <p class="forgot-pass">forgot password?</p>
                                </div>

                                <div class="btn-box mt-5">
                                    <button class="sign-in" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            
        </div>
  </div> 
  @include('layouts.footer')
@endsection