@extends('layouts.app')

@section('content')

<h1 class="heading">My complaints</h1>

<ul>
    @foreach ($complaints as $complaint)
        <li>{{$complaint->title}}</li>
    @endforeach
</ul>

@endsection