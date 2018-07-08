@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px; margin-left: 0;">
    <div class="row">
        <div class="col-sm-12 col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="img/telkomsel-logo.png" class="rounded mx-auto d-block" alt="..." height="40px;">
                    <!-- <div class="text-center">CAM INFORMATION SYSTEM</div class="text-center"> -->
                    <p class="text-center text-muted mt-5">{{ __('Please login your Account!') }}</p>
                    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Username or Password Wrong!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <form method="post" action="{{ route('login') }}">
                     @csrf
                        <div class="form-group">
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Enter email...">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Password...">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                      <button type="submit" class="btn btn-secondary btn-block btn-sm mb-3">{{ __('Login') }}</button>
                      <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection