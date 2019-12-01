@extends('layouts.app')

@section('content')

@include('inc.sidebar')

<div class="col-lg-10 mt-3 mt-lg-0">
    <div class="col-lg-7 mt-lg-5 ml-lg-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="/complaints/{{$complaint->id}}">
            @csrf
            @method('patch')
            <div class="form-group">
                <input type="text" name="title" placeholder="Complaint Title" id="title" class="form-control"
                    value="{{ $complaint->title }}">
            </div>
            <div class="form-group mt-4">
                <textarea type="text" rows="8" name="body" placeholder="Complaint body" id="body"
                    class="form-control">{{ $complaint->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection