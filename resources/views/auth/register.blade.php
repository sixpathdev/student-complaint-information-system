@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center margintop-content marginbottom-content">
<div class="col-md-7 mt-md-5">
<div class="card mt-lg-0">
<div class="card-header text-center h4 smaller-h4">{{ __('Student Registration') }}</div>
<div class="card-body">
<form method="POST" action="{{ route('register') }}">
@csrf

<div class="form-group row">
<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
<div class="col-md-7">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="matNo"
class="col-md-4 col-form-label text-md-right">{{ __('Matric Number') }}</label>
<div class="col-md-7">
<input id="matNo" type="text" class="form-control" name="matNo" required>

@error('matNo')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="email"
class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
<div class="col-md-7">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="password"
class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
<div class="col-md-7">
<input id="password" type="password"
class="form-control @error('password') is-invalid @enderror" name="password"
required>

@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="form-group row">
<label for="phone"
class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
<div class="col-md-7">
<input id="phone" type="tel" class="form-control" name="phone" required>

@error('phone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class=" px-3 btn btn-dark text-white">
{{ __('Register') }}
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection