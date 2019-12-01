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
        <div class="col-4 col-md-4">
            <div class="card text-white bg-warning pt-3 pb-2">
                <div class="card-body">
                    <p class="card-text mt-4 h4 custom-text-size2">Total Complaints</p>
                    <p class="h4 text-center text-dark custom-text-size2">{{$allcomplaintscount}}</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-4">
            <div class="card text-white bg-info pt-3 pb-2">
                <div class="card-body">
                    <p class="card-text mt-4 h4 custom-text-size2">Total Students</p>
                    <p class="h4 text-center text-dark custom-text-size2">{{$allstudentscount}}</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-4">
            <div class="card text-white bg-success pt-3 pb-2">
                <div class="card-body">
                    <p class="card-text mt-4 h4 custom-text-size2">Reviewed complaints</p>
                    <p class="h4 text-center text-dark custom-text-size2">{{$reviewedcomplaints2}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection