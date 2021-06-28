@include('layouts.header')
<div class="login-bg">
    <div class="container mt-5 ">
        <div class="row justify-content-center">
          
                <div class="col-md-8">
                    <div class="d-flex">
                        <div class="img-box m-5">
                            <h1 class="bolder">Welcome,</h1>
                            <h4 class="bold">Kindly fill in details to register</h4>
                            <img src="{{asset('img/relax.svg')}}" class="img-fluid relax" alt="">
                        </div>
                        <div class="form-box mt-5 p-3">
                            @include('layouts.errors')
                            <form action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Name" value="{{Old('name')}}"  aria-label="Email" aria-describedby="basic-addon1">
                                </div>

                                 <div class="mb-3">
                                    <input name="email" type="text" class="form-control" placeholder="Email Address" value="{{Old('email')}}"  aria-label="Email" aria-describedby="basic-addon1">
                                </div>

                            
                                <div class="mb-3">
                                    <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>

                                <div class="mb-3">
                                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>

                                

                                <div class="btn-box mt-5">
                                    <button class="sign-in" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            
        </div>
  </div> 
</div>
  
  @include('layouts.footer')
