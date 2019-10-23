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
            <div class="card text-white bg-warning pt-3 pb-2">
                <div class="card-body">
                    <p class="card-text mt-4 text-dark h4">Total Complaints</p>
                    <p class="h4 text-center text-dark">{{$allstudentscount}}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card text-white bg-info pt-3 pb-2">
                <div class="card-body">
                    <p class="card-text mt-4 text-dark h4">Total Reviewed</p>
                    <p class="h4 text-center text-dark">{{$reviewedcomplaints}}</p>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4">
            <div class="card text-white bg-success py-4">
                <div class="card-body">
                    <p class="card-text mt-4">Reviewed complaints</p>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection