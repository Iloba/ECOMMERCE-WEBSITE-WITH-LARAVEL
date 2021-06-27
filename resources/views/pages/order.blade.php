@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.errors')
        <div class="col-md-12 mb-2">
           <div class="table-responsive">
               @include('layouts.errors')
                <table class="table">
                    <thead>
                            <tr>
                                
                                <th>Total Price</th>
                                <th>Shipping Fee</th>
                                <th>Grand Total</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                               $ {{$products}}
                            </td>
                            <td>
                               $ 10
                            </td>
                            <td>
                                {{$products + 10}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <form action="{{route('place_order')}}" method="POST">
                    @csrf
                    <textarea name="address" class="form-control mb-3" placeholder="Enter Address" cols="30" rows="3    "></textarea>
                    <label for="Payment Method"><b>Payment Method</b></label>
                    <select name="payment_method" class="form-control mb-3" id="">
                        <option value="Select">---Select Payment Method---</option>
                        <option value="Online Payment">Online Payment</option>
                        <option value="PayPal">PayPal</option>
                        <option value="Pay on Delivery">Pay on Delivery</option>
                    </select> <br> <br>
                    <button type="submit" class="sign-in">Submit</button>
                </form>
           </div>
        </div>
    </div>
@endsection