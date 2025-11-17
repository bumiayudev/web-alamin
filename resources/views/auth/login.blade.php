@extends('auth.layout')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <img class="img-fluid" src="{{ asset('img/alaqso.jpg') }}" alt="mosque-islamic" srcset="">
    </div>
    <div class="col-lg-6">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
        </div>
        <form class="user" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                placeholder="Enter Email Address...">
                @error('email')
                    <span class="alert text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" class="form-control form-control-user"
                    id="exampleInputPassword" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-md btn-primary">
                Login
            </button>
            <a class="small" href="/register">Create an Account!</a>
        </form>
    </div>
</div>
@endsection
