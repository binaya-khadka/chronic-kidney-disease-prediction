@extends('Frontend.Layouts.app')

@section('title', 'My Profile')

@section('css')
<style>
  .section-title {
    font-family: var(--f-poppins);
  }
  .section-container {
    font-family: var(--f-gentium);
    padding: 2.125rem 1.1254rem;
  }
</style>

@endsection

@section('content')


<div class="container">
  <div class="section-title">
    <h1>My Profile</h1>
    <hr>
  </div>
  <div class="section-container">
    <p class="mini-title"><b>Name:</b> {{auth()->user()->name}}</p>
    <p class="mini-title"><b>Total Analysis Performed:</b> {{auth()->user()->analysis->count()}}</p>
  </div>
</div>

{{-- add code here --}}

{{-- <h1>My Profile</h1>
<hr>
<h2>Name : {{ auth()->user()->name }}</h2> --}}


{{-- count not working --}}
{{-- <h2>Total Analysis performed :  {{ auth()->user()->analyses->count() ?? 0 }}</h2> --}}


{{-- <h2>Total Analysis performed :  5 </h2>
<h2>Recent Analysis performed Result: Not CKD</h2>
<a href="/analysis/create"> Perform analysis</a> --}}



@endsection