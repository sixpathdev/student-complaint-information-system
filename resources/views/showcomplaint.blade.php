@extends('layouts.app')

@section('content')

@include('inc.sidebar')

<div class="col-lg-10 text-center mt-5">
<div class="jumbotron">
<h1>{{$complaint->title}}</h1>
<p class="mt-5">{{$complaint->body}}</p>
<div class="col-lg-12">
<a href="/complaints/{{$complaint->id}}/edit" class="text-white">
<button class="btn btn-primary float-left px-4">Edit</button>
</a>
<form method="POST" action="/complaints/{{$complaint->id}}">
@csrf
@method('delete')
<button class="btn btn-danger float-right px-4">Delete</button>
</form>
</div>
</div>
</div>

@endsection