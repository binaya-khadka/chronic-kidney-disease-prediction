<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <form action="{{route('homepage.patient.register.store')}}" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="name">
    <input type="number" name="age" id="age" placeholder="age">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="number" name="phone" id="phone" placeholder="phone">
    <input type="password" name="password" id="password" placeholder="password">
    <button type="submit">Submit</button>
  </form>

</body>

</html>