@extends('Frontend.Layouts.app')

@section('content')
  <div class="card-body">
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif
{{ __('You are logged in!') }}
</div>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://i0.wp.com/post.medicalnewstoday.com/wp-content/uploads/sites/3/2022/08/renal-medulla-kidney-engraved-header-1024x575.png?w=1155&h=1528" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQobLOR0ZF790XkcVj85OFrqDYSQboD1s-kZw&usqp=CAU" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://www.healthdigest.com/img/gallery/what-happens-to-our-kidneys-as-we-age/l-intro-1659547198.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="card text-center">
    
    <div class="card-body">
        <h2>What are our Objectives</h2>
      <p class="card-text">To reduce the chances of CKD leading to dialysis or kidney transplantation. </p>
      <p class="card-text">Replace paper measurement recording with a database in the application
    </p>
      <p class="card-text">Allow patients to view medical records and progress </p>
      <p class="card-text">Use data mining and machine learning algorithms to build the model </p>
      <p class="card-text">Provide experimental results and analysis to measure accuracy </p>
    
    </div>
    {{-- <div class="card-footer text-muted">
      2 days ago
    </div> --}}
  </div>
@endsection