@extends('Frontend.Layouts.app')

@section('content')
<div class="container">
    <h1>
        Anlaysis Log
    </h1>
    <div class="card">
        <h5 class="card-header">Log1</h5>
        <div class="card-body">
            <h5 class="card-title">CKD</h5>
            <p class="card-text">Symptpms</p>
            <a href="#" class="btn btn-primary">View Details</a>
            <a href="#" class="btn btn-danger">Remove</a>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Log2</h5>
        <div class="card-body">
            <h5 class="card-title">Not CKD</h5>
            <p class="card-text">Symptpms</p>
            <a href="#" class="btn btn-primary">View Details</a>
            <a href="#" class="btn btn-danger">Remove</a>
        </div>
    </div>
</div>
@endsection