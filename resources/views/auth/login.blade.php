@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="/" class="">
                        <h5 class="text-primary"><i class="fa fa-hashtag me-2"></i>Vila Situ Cileunca</h5>
                    </a>
                    <h3>Sign In</h3>
                </div>
                <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-floating mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                </div>
                <div class="form-floating mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
