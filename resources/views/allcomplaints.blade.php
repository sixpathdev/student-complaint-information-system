@extends('layouts.app')

@section('content')
@include('inc.sidebar')

<div class="col-lg-10">
    <div class="text-center my-4">
        <h1>My complaints</h1>
    </div>

    <div class="col-lg-12">
        <ul class="list-group">
            @foreach ($complaints as $complaint)
            <li class="list-group-item"><a href="/complaints/{{$complaint->id}}">{{$complaint->title}}</a></li>
            @endforeach
        </ul>
    </div>
</div>

@endsection