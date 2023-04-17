@include('Frontend.Layouts.navbar')
@include('Frontend.Layouts.footer_script')
@include('Frontend.Layouts.meta_tags')
@include('Frontend.layouts.nav_links')

<!DOCTYPE html>
<html lang="en">

<head>
  @yield('meta_tags')
  <title>@yield('title')</title>
  @yield('nav_links')
  @yield('css')
  <link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
</head>

<body>
  <div class="container">
    @yield('navbar')
    @yield('content')
    @yield('footer_script')
    @yield('css')
  </div>
</body>

</html>