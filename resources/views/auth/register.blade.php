@extends('auth.layout')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <img class="img-fluid" src="{{ asset('img/alaqso.jpg') }}" alt="img-register" srcset="">
    </div>
    <div class="col-lg-6" method="POST">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-user" id="username"
                        placeholder="username">
                    @error('name')
                        <span class="alert text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                        placeholder="Email Address">
                    @error('email')
                    <span class="alert text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" name="password" class="form-control form-control-user"
                            id="exampleInputPassword" placeholder="Password">
                        @error('password')
                            <span class="alert text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input type="password" name="retype_password" class="form-control form-control-user"
                            id="exampleRepeatPassword" placeholder="Repeat Password">
                        @error('retype_password')
                            <span class="alert text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-md btn-primary">
                    Register Account
                </button>
                <a class="small" href="/login">Already have an account? Login!</a>
            </form>
    </div>
</div>
@endsection
