@extends('layouts.app')

@section('content')

@include('inc.sidebar')

<div class="col-md-10 mt-4 toggle-block">
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
        <form method="POST" action="/complaints">
            @csrf
            <div class="form-group">

                <input type="text" name="title" placeholder="Complaint Title" id="title" class="form-control"
                    value="{{ old('title') }}">
            </div>
            <div class="form-group mt-4">
                <textarea type="text" rows="8" name="body" placeholder="Complaint body" id="body"
                    class="form-control">{{ old('body') }}</textarea>
            </div>
            <button type="submit" class="btn bg-dark">Submit</button>
        </form>
    </div>
</div>


@endsection