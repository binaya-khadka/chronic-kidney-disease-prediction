@extends('Frontend.Layouts.app')

@section('title', 'My Profile')

@section('content')
{{-- add code here --}}
<h1>My Profile</h1>
<hr>
<h2>Name : {{ auth()->user()->name }}</h2>
{{-- count not working --}}
{{-- <h2>Total Analysis performed :  {{ auth()->user()->analyses->count() ?? 0 }}</h2> --}}
<h2>Total Analysis performed :  5 </h2>
<h2>Recent Analysis performed Result: Not CKD</h2>
<a href="/analysis/create"> Perform analysis</a>

@endsection