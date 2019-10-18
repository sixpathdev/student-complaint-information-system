@extends('layouts.app')

@section('content')
<div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
<div class="col-lg-2 text-white text-center font-weight-bold bg-primary py-3">
    <div>View Complaints</div>
</div>
<div class="col-lg-10">
    <h2 class="text-center text-primary">Dashboard</h2>
</div>
@endsection