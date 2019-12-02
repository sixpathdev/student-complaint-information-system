@extends('layouts.app')

@section('content')
@include('inc.sidebar')

<div class="col-md-10 toggle-block">
    <div class="text-center my-4">
        <h3>My complaints</h3>
    </div>

    <div class="col-lg-12">
        <ul class="list-group">
            @if ($complaints->count())
            @foreach ($complaints as $complaint)
            <li class="list-group-item {{$complaint->reviewed ? 'bg-success text-white' : ''}}"><a
                    href="/complaints/{{$complaint->id}}"
                    class="text-decoration-none text-white h5 text-primary">{{$complaint->title}}</a>
            </li>
            @endforeach

            @else
            <h5 class="bg-warning text-dark text-center">
                No complaint created yet.
            </h5>
            @endif

        </ul>
    </div>
</div>

@endsection