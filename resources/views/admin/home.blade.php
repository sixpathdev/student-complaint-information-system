@extends('layouts.app')

@section('content')
<div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
@include('inc.sidebar')
<div class="col-lg-10">
    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="card text-white bg-warning py-4">
                <div class="card-body">
                    <p class="card-text mt-4">Total Complaints</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card text-white bg-info py-4">
                <div class="card-body">
                    <p class="card-text mt-4">Total Students</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card text-white bg-success py-4">
                <div class="card-body">
                    <p class="card-text mt-4">Reviewed complaints</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection