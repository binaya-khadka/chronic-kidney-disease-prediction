@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">CKD-Prediction</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('Frontend.analysispage')}}">Analysis Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('analysis.show')}}">Analysis Log</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Udpate.html">Update Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Frontend.aboutus')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Frontend.contactus')}}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection