@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center margintop-content">
        <div class="col-md-7 mt-md-5">
            <div class="card">
                @if (session('message'))
                <span class="alert alert-success alert-dismissible fade show">{{session('message')}}</span>
                @endif
                <div class="card-header text-center h4 smaller-h4">{{ $title ?? 'd' }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ $loginRoute }}">
                        @csrf
                        @method('post')
                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right text-gray">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right text-gray">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="px-3 btn btn-dark">
                                    {{ __('Login') }}
                                </button> <br> <br>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route($forgotPasswordRoute) }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection