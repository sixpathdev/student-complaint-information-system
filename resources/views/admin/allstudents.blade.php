@extends('layouts.app')

@section('content')
@include('inc.sidebar')

<div class="col-md-10 toggle-block">
    <div class="text-center my-4">
        <h1 class="custom-text-size3">All Students</h1>
    </div>

    <div class="col-md-10 toggle-block">
        @if ($allstudents->count())
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allstudents as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="bg-warning text-white text-center mt-lg-5">
            <h4>No Student registered yet.</h4>
        </div>
        @endif

    </div>
</div>

@endsection