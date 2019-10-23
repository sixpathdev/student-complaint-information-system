@extends('layouts.app')

@section('content')
@include('inc.sidebar')

<div class="col-lg-10">
    <div class="text-center my-4">
        <h1>All Students complaints</h1>
    </div>

    <div class="col-lg-12">
        @if ($allcomplaints->count())
        <ul class="list-group">
            @foreach ($allcomplaints as $acomplaint)
            <li class="list-group-item {{$acomplaint->reviewed ? 'bg-success text-white' : ''}}">
                <form method="POST" action="/admin/review/{{$acomplaint->id}}">
                    @csrf
                    @method('PATCH')
                    <label class="checkbox" for="reviewed">
                        <input type="checkbox" aria-label="Checkbox for following text input" name="reviewed"
                            onchange="this.form.submit()" {{$acomplaint->reviewed ? 'checked' : ''}}>
                        <a href="/admin/viewcomplaint/{{$acomplaint->id}}"
                            class="{{$acomplaint->reviewed ? 'text-decoration-none text-white h5' : ''}}">{{$acomplaint->title}}</a>
                    </label>
                </form>
            </li>
            @endforeach
        </ul>
        @else
        <div class="bg-warning text-white text-center mt-lg-5">
            <h4>No Students complaints yet</h4>
        </div>
        @endif

    </div>
</div>

@endsection