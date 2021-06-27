@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.errors')
        <div class="col-md-12 mb-2">
            <a href="{{route('make_order')}}" class="btn btn-success mb-2">Order Now</a>
            @foreach ($products as $product)
                <div class="card mb-3 p-2">
                    <div class="row">
                        <div class="col-md-7">
                            <img class="img-fluid w-50" src="{{$product->gallery}}" alt="">
                        </div>
                        <div class="col-md-5">
                            <h2>{{$product->name}}</h2>
                            <p>{{$product->description}}</p>
                            <h5>N{{$product->price}}</h5>
                            <form action="{{route('remove_item', $product->id)}}" method="POST">
                                @csrf
                                <input type="text" class="d-none" value="{{$product->id}}">
                                <button type="submit" class="btn btn-danger">Remove from Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection