@extends('layout.app')

@section('content')
<h1>You are on the Profile Page</h1>
@endsection

@if(auth()->check())
<div>
    Para lang sa mga nakalogin
</div>
@endif

@section('title')
    Profile Page
@endsection