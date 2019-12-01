@extends('layouts.app')

@section('content')

@include('inc.sidebar')

<div class="col-lg-10 text-center mt-3 mt-lg-5">
<div class="jumbotron pb-5 pb-lg-0">
<h1 class="custom-text-size3">{{$complaint->title}}</h1>
<p class="mt-3 mt-lg-5">{{$complaint->body}}</p>
<div class="col-lg-12">
<a href="/complaints/{{$complaint->id}}/edit" class="text-white">
<button class="btn btn-primary float-left px-2 px-lg-4">Edit</button>
</a>
<form method="POST" action="/complaints/{{$complaint->id}}">
@csrf
@method('delete')
<button class="btn btn-danger float-right px-2 px-lg-4">Delete</button>
</form>
</div>
</div>
</div>

@endsection