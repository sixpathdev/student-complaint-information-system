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
<div class="col-md-10 toggle-block">
    <div class="row mt-4">
        <div class="col-6 col-md-5 col-lg-4">
            <div class="card text-white bg-warning pt-3 pb-2">
                <div class="card-body">
                    <p class="card-text mt-4 text-dark h4 custom-text-size2">Total Complaints</p>
                    <p class="h4 text-center text-dark custom-text-size2">{{$mycomplaints}}</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-5 col-lg-4">
            <div class="card text-white bg-info pt-3 pb-2">
                <div class="card-body">
                    <p class="card-text mt-4 text-dark h4 custom-text-size2">Total Reviewed</p>
                    <p class="h4 text-center text-dark custom-text-size2">{{$reviewedcomplaints}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection