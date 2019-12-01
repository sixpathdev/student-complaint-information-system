@extends('layouts.app')

@section('content')

@include('inc.sidebar')

<div class="col-md-10 text-center mt-4">
    <div class="jumbotron">
        <h2>{{$complaint->title}}</h2>
        <p class="mt-4">{{$complaint->body}}</p>
    </div>
</div>

@endsection