@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.errors')
        <div class="col-md-12 mb-2">
            <h4 class="mb-4">My Orders</h4>
            @foreach ($orderedItems as $orderedItem)
                <div class="card mb-3 p-2">
                    <div class="row">
                        <div class="col-md-7">
                            <img class="img-fluid w-50" src="{{$orderedItem->gallery}}" alt="">
                        </div>
                        <div class="col-md-5">
                            <h2>{{$orderedItem->name}}</h2>
                            <p>{{$orderedItem->description}}</p>
                            <h5>N{{$orderedItem->price}}</h5>
                            <h5>Status: {{$orderedItem->status}}</h5>
                            <h5>Payment Method: {{$orderedItem->payment_method}}</h5>
                            <h5>Payment Status: {{$orderedItem->payment_status}}</h5>
                            <h5>Delivery Address: {{$orderedItem->address}}</h5>
                           
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection