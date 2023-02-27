@include('Backend.Layouts.footer_script')
@include('Backend.Layouts.meta_tags')
@include('Backend.Layouts.head_links')
@include('Backend.Layouts.navbar')
@include('Backend.Layouts.side_navbar')

<!DOCTYPE html>
<html lang="en">

<head>
  @yield('meta_tags')
  <title>@yield('title')</title>
  @yield('head_links')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @yield('navbar')
    @yield('side_navbar')
    @yield('content')
    @yield('footer')
  </div>
  @yield('footer_script')
</body>

</html>