@extends('Frontend.Layouts.app')

@section('title', 'Contact Us')

@section('css')
  <style>
    .b-title::after {
      margin: 1rem 0;
      content: "";
      display: block;
      background: #363636;
      width: 10rem;
      height: 2px;
    }
  </style>
@endsection

@section('content')
<div class="container" style="margin: 5rem 0;">
  <div class="container mt-4">
    <div class="row aic jcc">
      <div class="col-md-6">
        <h2 class="b-title">Contact Information</h2>
        <p><i class="fa fa-map-marker"></i>Bijayachowk Gausala, Kathmandu</p>
        <p><i class="fa fa-phone" aria-hidden="true"></i>+977-9*********</p>
        <p><i class="fa fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></p>
        {{-- <p><i class="fa fa-facebook-official" aria-hidden="true"></i>info@facebook.com</p>
        <p><i class="fa fa-twitter"></i><a href="#">Twitter</a></p>
        <p><i class="fa fa-instagram"></i><a href="#">Instagram</a></p> --}}
      </div>
      <div class="col-md-6">
        <img
          src="https://img.freepik.com/free-vector/organic-flat-customer-support-illustration_23-2148899174.jpg?w=2000"
          class="img-fluid" alt="Contact Us Image">
      </div>
    </div>
    <hr>
    <div class="container">
      <h2 class="b-title">Feedback Form</h2>
      <form method="POST" action="{{route('frontend.contactus.store')}}">
        @csrf
        <div class="form-group b-subtitle">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        {{-- <button type="reset" class="btn btn-danger">Clear</button> --}}
      </form>
    </div>

  </div>
</div>
@endsection