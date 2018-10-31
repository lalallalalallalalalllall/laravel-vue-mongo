@extends('layouts.app') 
@section('content')
<div style="background-color:red; height: 100% ; width : 100%">
    body area
</div>

{{--
<div class="col-md-8">
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif You are logged in la!
        </div>
    </div>
</div> --}}
@endsection