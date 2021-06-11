@extends('layouts.app')
@section('content')
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                &nbsp;
            </div>
            <div class="col-md-4">
                <h2>Welcome back,</h2>
                <h5>Kindly fill in details to log in</h5>
                <img src="{{asset('img/relax.svg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <form action="">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                </form>
               </div>
            </div>
            <div class="col-md-4">
                &nbsp;
            </div>
        </div>
  </div> 
@endsection