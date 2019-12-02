@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-2 mt-md-1 mt-lg-4">
        <div class="col-md-5">
            <div class="card">
                <div class="col-12 text-center h5 mt-3 smaller-h4"> REGISTER AS ADMIN</div>
                <div class="card-body">
                    <form method="POST" action="{{ route($registerRoute) }}">
                        @csrf

                        <div class="form-group">
                            {{-- <label for="name">{{ __('Name') }}</label> --}}
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" placeholder="Full name" value="{{ old('name') }}" required
                                autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            {{-- <label for="staffid">{{ __('Staff Id') }}</label> --}}
                            <input id="staffid" type="text" class="form-control @error('staffid') is-invalid @enderror"
                                name="staffid" placeholder="Staff ID" value="{{ old('staffid') }}" required
                                autocomplete="staffid">

                            @error('staffid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            {{-- <label for="email">{{ __('E-Mail Address') }}</label> --}}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required
                                autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            {{-- <label for="password">{{ __('Password') }}</label> --}}
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Password" required>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            {{-- <label for="phone">{{ __('Phone Number') }}</label> --}}
                            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="col-12 btn btn-dark text-white">
                            {{ __('Register') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection