@extends('layouts.app')
@section('content')
    <div class="section">
        @include('layouts.errors')
        <div class="container">
            <div class="row">
               
                    @foreach ($products as $product)
                    <div class="col-md-3 mb-3 ">
                        <div class="card card-body">
                            <img src="{{$product->gallery}}" alt="">
                            <h4 class="mt-3 text-success fw-bold">{{$product->name}}</h4>
                            <h5> <b>Price: </b>N{{$product->price}}</h5>
                            <div class="d-flex ">
                                <div class="m-2">
                                   <form action="">
                                    <a class="btn btn-success " href="">Add to Cart <i class="icofont-cart-alt"></i></a>
                                   </form>
                                </div>
                               <div class="m-2">
                                 <button class="btn btn-warning " href=""><i class="icofont-eye-open"></i></button>
                               </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
               
            </div>
        </div>
    </div>
@endsection
