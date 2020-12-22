@extends('layouts.theme')

@section('content')



<div class="bg-white_">
    <div class="container">
    <div class="row justify-content-center align-items-center d-flex vh-100">
    <div class="col-lg-6 mx-auto">
    <div class="osahan-login py-4">
    <div class="text-center mb-4">
    <a href="index.html"><img src="{{asset('assets/images/exxpert-logo2.png')}}" alt=""></a>
    <h5 class="font-weight-bold mt-3">Welcome Back</h5>
    <p class="text-muted">Don't miss your next opportunity. Sign in to stay updated on your professional world.</p>
    </div>
    <form method="POST" action="{{ route('login') }}" class="card p-5">
        @csrf
    <div class="form-group">
    <label class="mb-1">Email</label>
    <div class="position-relative icon-form-control">
    <i class="mdi mdi-account position-absolute"></i>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    </div>
    <div class="form-group">
    <label class="mb-1">Password</label>
    <div class="position-relative icon-form-control">
    <i class="mdi mdi-key-variant position-absolute"></i>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    </div>
    <div class="custom-control custom-checkbox mb-3">
        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
    <label class="custom-control-label" for="remember">Remember password</label>
    </div>
    <button class="btn btn-success btn-block text-uppercase" type="submit"> Sign in </button>
    <div class="text-center mt-3 border-bottom pb-3">
    <p class="small text-muted">Or login with</p>
    <div class="row">
    <div class="col-6">
    <button type="button" class="btn btn-outline-instagram btn-block"><i class="mdi mdi-instagram"></i> Instagram</button>
    </div>
    <div class="col-6">
    <button type="button" class="btn btn-outline-facebook btn-block"><i class="mdi mdi-facebook"></i> Facebook</button>
    </div>
    </div>
    </div>
     <div class="py-3 d-flex align-item-center">
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
    <span class="ml-auto"> New to Exxpert? <a href="{{route('register')}}">Join now</a></span>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>



@endsection
