@extends('layouts.app')

@section('content')
<div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
</div>
<style>
.lavender {
    background-color: lavender;
}
</style>
<div class="col-lg-2 bg-primary text-white">
<div class="col-12 py-1"><a href={{route('complaints.write')}}>Write Complaint</a></div>
<div class="col-12 py-1">View Reviewed Complaint</div>
<div class="col-12 py-1">Write Complaint</div>
</div>
<div class="col-10 lavender text-center">
    Show all complaints
</div>
@endsection