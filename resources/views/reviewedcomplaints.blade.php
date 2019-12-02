@extends('layouts.app')

@section('content')
@include('inc.sidebar')

<div class="col-md-10 toggle-block">
    <div class="text-center my-4">
        <h1 class="custom-text-size3">Reviewed Complaints</h1>
    </div>

    <div class="col-lg-12">
        @if ($reviewedcomplaints->count())
        <ul class="list-group">
            @foreach ($reviewedcomplaints as $reviewedcomplaint)
            <li class="list-group-item {{$reviewedcomplaint->reviewed ? 'bg-success text-white' : ''}}">
                <a
                    class="{{$reviewedcomplaint->reviewed ? 'text-decoration-none text-white h5' : ''}}">{{$reviewedcomplaint->title}}</a>
                <span class="badge badge-pill badge-light text-success float-right py-auto">Reviewed</span>
            </li>
            @endforeach
        </ul>
        @else
        <div class="bg-warning text-default text-center mt-lg-5">
            <h4>No reviewed complaints yet.</h4>
        </div>
        @endif

    </div>

</div>

@endsection