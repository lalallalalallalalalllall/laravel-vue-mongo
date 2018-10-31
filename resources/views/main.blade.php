@extends('layouts.app') 
@section('content')
<div >
    <div id="app">
        <app Food="{{Auth::user()}}"></app>
    </div>
</div>
@endsection
