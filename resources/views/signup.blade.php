@extends('index')
@section('content')

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="color: black;">Registration Form</h3>
                        <form action={{route('adduser')}} method="POST">
                            @csrf
                            <div class="col-md-6 mb-4">

                                <div class="form-outline">
                                    <label class="form-label" for="Username">Username</label>
                                    <input type="text" id="firstName" class="form-control form-control-lg" name="username" value="{{old('username')}}" />
                                    <span class="text-danger">@error('username'){{$message}} @enderror</span>
                                </div>


                            </div>
                            <div class="col-md-6 mb-4">

                                <div class="form-outline">
                                    <label class="form-label" for="name">Business name</label>
                                    <input type="text" id="firstName" class="form-control form-control-lg" name="name" value="{{old('name')}}" />
                                    <span class="text-danger">@error('name'){{$message}} @enderror</span>

                                </div>


                            </div>
                            <div class="col-md-6 mb-4">

                                <div class="form-outline">
                                    <label class="form-label" for="Email">Email</label>
                                    <input type="email" id="firstName" class="form-control form-control-lg" name="email" value="{{old('email')}}" />
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>


                            </div>
                            <div class="col-md-6 mb-4">

                                <div class="form-outline">
                                    <label class="form-label" for="Password">Password</label>
                                    <input type="password" id="firstName" class="form-control form-control-lg" name="password" value="{{old('password')}}" />
                                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="mt-4 pt-2">
                                <input class="btn btn-lg" type="submit" value="Submit" style="background-color: #f2a3b3;color: #fff; " />
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection