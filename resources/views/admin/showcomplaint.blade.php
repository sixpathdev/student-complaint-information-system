@extends('layouts.app')

@section('content')

@include('inc.sidebar')

<div class="col-lg-10 text-center mt-5">
    <div class="jumbotron">
        <h1>{{$complaint->title}}</h1>
        <p class="mt-5">{{$complaint->body}}</p>
    </div>
</div>

@endsection