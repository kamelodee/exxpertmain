@extends('layouts.theme')

@section('content')

<div class="py-5 mb-5">
    <div class="container">
    <div class="row justify-content-center align-items-center d-flex vh-100">
    <div class="col-lg-6 mx-auto">
    <div class="osahan-login py-4">
    <div class="text-center mb-4">
    <a href="index.html"><img src="{{asset('assets/images/exxpert-logo2.png')}}" alt=""></a>
    <h5 class="font-weight-bold mt-3">Join Exxpert</h5>
    <p class="text-muted">Make the most of your professional life</p>
    </div>
    <form method="POST" action="{{ route('register') }}" class="card p-5">
        @csrf
    <div class="form-row">
    <div class="col">
    <div class="form-group">
    <label class="mb-1">First name</label>
    <div class="position-relative icon-form-control">
    <i class="mdi mdi-account position-absolute"></i>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label class="mb-1">Last name</label>
    <div class="position-relative">
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    <div class="form-group">
    <label class="mb-1">Email</label>
    <div class="position-relative icon-form-control">
    <i class="mdi mdi-email-outline position-absolute"></i>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    </div>
    <div class="form-group">
    <label class="mb-1">Password (6 or more characters)</label>
    <div class="position-relative icon-form-control">
    <i class="mdi mdi-key-variant position-absolute"></i>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    </div>
    <div class="form-group">
    <label class="mb-1">You agree to the exxpert <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a>.</label>
    </div>
    <button class="btn btn-success btn-block text-uppercase" type="submit"> Agree & Join </button>
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
<span class="ml-auto"> Already on Exxpert ? <a href="{{asset('login')}}">Sign in</a></span>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>



@endsection
