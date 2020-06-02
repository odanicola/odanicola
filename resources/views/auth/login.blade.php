@extends('layouts.login')

@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card card-signin my-5">
        <div class="card-body">
        <h5 class="card-title text-center">Sign In</h5>
        <form method="POST" action="{{ route('login') }}" class="form-signin">
            @csrf
            <div class="form-label-group mb-2">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-label-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="custom-control custom-checkbox mb-3">
                <!-- <input type="checkbox" class="custom-control-input" id="customCheck1"> -->
                <!-- <label class="custom-control-label" for="customCheck1">Remember password</label> -->
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            <hr class="my-4">
            <p class="text-center"><a href="{{ url('') }}" class="text-primary"><i class="fas fa-arrow-left"></i> Home Page</a></p>
            <!-- 
            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
        </form>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
