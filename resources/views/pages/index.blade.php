@extends('layouts.app')
@section('content')
    <div class="section">
        <div class="container">
          @include('layouts.errors')
            <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-3 mb-3 ">
                        <div class="card card-body">
                            <img src="{{$product->gallery}}" alt="">
                            <h4 class="mt-3 text-success fw-bold">{{$product->name}}</h4>
                            <h5> <b>Price: </b>N{{$product->price}}</h5>
                            <div class="d-flex ">
                                <div class="m-2">
                                   <form action="{{route('add_to_cart')}}" method="POST">
                                       @csrf
                                       <input type="text" class="d-none" name="product_id" value="{{$product->id}}">
                                    <button type="submit" class="btn btn-success " href="">Add to Cart <i class="icofont-cart-alt"></i></button>
                                   </form>
                                </div>
                               <div class="m-2">
                                 <button class="btn btn-warning " data-toggle="modal" data-target="#productModal-{{$product->id}}" href=""><i class="icofont-eye-open"></i></button>
                               </div>
                               <div class="modal fade" id="productModal-{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">{{$product->name}}</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                     <div class="row">
                                        <div class="col-md-7">
                                          <img class="img-fluid " src="{{$product->gallery}}" alt="">
                                        </div>
                                        <div class="col-md-5 mt-3">
                                          <h5 class="fw-bold"> <b></b>{{$product->description}}</h5>
                                          <h5> <b>Price: </b>N{{$product->price}}</h5>
                                          <p><i>Shipping fee inclusive</i></p>
                                          <div class="mt-2">
                                            <form action="{{route('add_to_cart')}}" method="POST">
                                                @csrf
                                                <input type="text" name="product_id" class="d-none" value="{{$product->id}}">
                                             <button type="submit" class="btn btn-success btn-block " href="">Add to Cart <i class="icofont-cart-alt"></i></button>
                                            </form>
                                         </div>
                                        </div>
                                     </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
