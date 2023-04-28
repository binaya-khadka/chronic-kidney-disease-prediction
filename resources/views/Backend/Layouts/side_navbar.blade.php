@section('side_navbar')
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <a href="index3.html" class="brand-link" style="font-weight: 700; text-align:center;">
    {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8"> --}}
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>

  <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="{{route('admin')}}" class="d-block">{{ucFirst(Auth::user()->name)}}</a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{route('admin')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-solid fa-user"></i>
            <p>Patients</p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.patient.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Index</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{route('admin.patient.trashed')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Deleted</p>
              </a>
            </li> --}}
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{ route('contact.index') }}" class="nav-link">
          <i class="nav-icon fa fa-address-book"></i>
          <p>Contact Us</p>
          </a>
        </li>
      </ul>
    </nav>

  </div>

</aside>
@endsection