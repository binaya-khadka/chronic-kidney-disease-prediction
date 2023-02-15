@include('Layouts.html_head')
@include('Layouts.navbar')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('html_head')
</head>

<body>
    @yield('navbar')
    @yield('content')
</body>

</html>