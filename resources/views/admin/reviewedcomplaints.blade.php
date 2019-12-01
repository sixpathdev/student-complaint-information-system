@extends('layouts.app')

@section('content')
@include('inc.sidebar')

<div class="col-md-10 toggle-block">
    <div class="text-center my-4">
        <h3>Reviewed Complaints</h3>
    </div>

    <div class="col-md-10">
        @if ($reviewedcomplaints->count())
        <ul class="list-group">
            @foreach ($reviewedcomplaints as $reviewedcomplaint)
            <li class="list-group-item mb-1 {{$reviewedcomplaint->reviewed ? 'bg-success text-white' : ''}}">
                <a class="{{$reviewedcomplaint->reviewed ? 'text-decoration-none text-white h5' : ''}}">
                    <h5>{{$reviewedcomplaint->title}}</h5>
                </a>
                <form method="POST" action="/admin/complaints/{{$reviewedcomplaint->id}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger float-right">Delete</button>
                </form>
                <span class="badge badge-pill badge-light text-success ml-lg-5 py-auto">Reviewed</span>
            </li>
            @endforeach
        </ul>
        @else
        <div class="bg-default text-default text-center mt-lg-5">
            <h4>No reviewed complaints</h4>
        </div>
        @endif

    </div>
</div>

@endsection